<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen Bundle for Symfony. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra-network.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/mit-license.html The MIT License (MIT)
 */

namespace Lyra\PayzenBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Lyra\PayzenBundle\Includes\PayzenResponse;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Lyra\PayzenBundle\Payzen\PayzenService;


class PayzenController extends AbstractController
{


    /**
     * @Route("/payzenRedirectForm/redirectPaymentLyra")
     */
    public function redirect_payment_lyra (PayzenService $payzen,ContainerInterface $container, Request $request)
    {
        $params= []; 

        $array_keys = $request->query->keys();
        foreach ($array_keys as &$key) {
            $params [$key] = $request->query->get($key);
        }

        $Form = $payzen->setRequestParams($params,$container);
    

        return $this->render ('payzenRedirectForm/formPayment.html.twig', [
            'payzen' => $Form
        ]);
    }


    /**
     * @Route("/payzenRedirectForm/PaymentLyra", name="payment_lyra")
     */
    public function payment_lyra (PayzenService $payzen,ContainerInterface $container, Request $request)
    {

        $params= []; 

        $logger = $this->get_logger($container);
        if($request->request->get("form") != false){
            $formArrays=$request->request->get("form");
            $array_keys= array_keys($formArrays);
            //var_dump($array_keys);
        }
        
        //$array_keys = $request->query->keys();
        foreach ($array_keys as &$key) {
           // $logger->info("Lyra->PayzenController->payment_lyra key: ".$key);
           // $keyParams = 
            $params [$key] = $formArrays[$key]; //$request->query->get($key);

        }

        $Form = $payzen->setRequestParams($params,$container);


        return $this->render ('payzenRedirectForm/formPayment.html.twig', [
            'payzen' => $Form
        ]);
    }


    


        
    /**
     * @Route("/payzen/redirect", name="payzen.paymentRedirect")
     * @return Response
     */
	public function paymentRedirect(Request $request,ContainerInterface $container, PayzenService $payzen_service)
    {
        
        $raw_request = array_merge($request->query->all(), $request->request->all());

        $logger = $this->get_logger($container);
        $logger->info('Data to be sent to payment gateway : ' . print_r($raw_request['params_log'], true));
        //$payzen_service = $this->get('payzen_service');
        echo $payzen_service->get_platform_url();
        return $this->render('@Payzen/payzen_redirect.html.twig', [
            'payzen_raw_request' => $raw_request['params'],
            'payzen_uri' => $payzen_service->get_platform_url()
        ]);
    }

    /**
     * @Route("/payzen/callback", name="paymentCallback")
     */
    public function paymentCallback(Request $request,ContainerInterface $container, PayzenService $payzen_service)
    {
        $parameters = array_merge($request->query->all(), $request->request->all());
        $logger = $this->get_logger($container);

       // $payzen_service = $this->get('payzen_service');

        $payzen_response = new PayzenResponse(
            $parameters,
            $payzen_service->get_ctx_mode(),
            $payzen_service->get_key_test(),
            $payzen_service->get_key_prod(),
            $payzen_service->get_sign_algo()
        );

        $logger->info('Response received from PayZen server IPN test Victor: ' . print_r($parameters, true));
        // check the authenticity of the request
        if (!$payzen_response->isAuthentified()) {
        	$ip = $request->server->get('REMOTE_ADDR');
            $logger->Error("{$ip} tries to access payzen-bundle/Controller/PayzenController without valid signature with parameters: " . print_r($parameters, true));
            $logger->Error('Signature algorithm selected in module settings must be the same as one selected in PayZen Back Office.');
            $logger->info('SERVER URL PROCESS END');
            die($payzen_response->getOutputForGateway('auth_fail'));
        }

        if ($payzen_response->isAcceptedPayment()) {
            $logger->info('Payment successfull, let\'s save order #');
            $logger->info('Payment completed successfully by server URL call.');
            $logger->info('SERVER URL PROCESS END');

            //this method is for manage de call back paymet from Lyra // your code here
            $logger->info("this method is for manage call back paymet from Lyra");
            $this->manageCallbackPayment($parameters,$logger);
          
          
           //YOUR CODE HERE
            $logger->info("Finish manage callback");


            //This method is for manage rensponse for the gateway , depend value
            if($payzen_response->verifyValueInPageAction("REGISTER")){
                die($payzen_response->getOutputForGateway('register_ok'));
            }else{
                die($payzen_response->getOutputForGateway('payment_ok'));
            }           
        } else {
            $logger->info('Payment failed or cancelled. ' . $payzen_response->getLogMessage());
            $logger->info('SERVER URL PROCESS END');

            //This method is for manage rensponse for the gateway , depend value
            if($payzen_response->verifyValueInPageAction("REGISTER")){
                die($payzen_response->getOutputForGateway('register_ko'));
            }else{
                die($payzen_response->getOutputForGateway('payment_ko'));
            }    
        }

    }

    public function manageCallbackPayment($parameters, Logger $logger){


        //YOUR CODE HERE FOR MANAGE CALLBACK
    }

    /**
     * @Route("/payzen/response", name="paymentResponse")
     * @return Response
     */
    public function paymentResponse(Request $request, ContainerInterface $container, PayzenService $payzen_service)
    {
        $parameters = array_merge($request->query->all(), $request->request->all());
        $logger = $this->get_logger($container);

        //$payzen_service = $this->get('payzen_service');

        $payzen_response = new PayzenResponse(
            $parameters,
            $payzen_service->get_ctx_mode(),
            $payzen_service->get_key_test(),
            $payzen_service->get_key_prod(),
            $payzen_service->get_sign_algo()
        );

        $logger->info('Response received from PayZen server URL: ' . print_r($parameters, true));
        // check the authenticity of the request
        if (!$payzen_response->isAuthentified()) {
            $ip = $request->server->get('REMOTE_ADDR');
            $logger->Error("{$ip} tries to access payzen-bundle/Controller/PayzenController without valid signature with parameters: " . print_r($parameters, true));
            $logger->Error('Signature algorithm selected in module settings must be the same as one selected in PayZen Back Office.');
            $logger->info('RETURN URL PROCESS END');
            die($payzen_response->getOutputForGateway('auth_fail'));
        }

        $result = '';
        if ($payzen_response->isAcceptedPayment()) {
            $result = 'accepted';
            $logger->info('Payment successfull, let\'s save order #');
            $logger->info('Payment completed by return URL call.');
        } else if ($payzen_response->isCancelledPayment()) {
            $result = 'canceled';
            $logger->info('Payment cancelled ' . $payzen_response->getLogMessage());
        } else {
            $result = 'failure';
            $logger->info('Payment failed ' . $payzen_response->getLogMessage());
        }

        $logger->info('RETURN URL PROCESS END');

        return $this->render('@Payzen/payzen_callback.html.twig', [
                'result' => $result
        ]);
    }


    /**
     * @Route("/payzen/ipn", name="paymentIpn")
     * @return void
     */
    public function paymentIpnRegister(Request $request, ContainerInterface $container, PayzenService $payzen_service){
        $parameters = array_merge($request->query->all(), $request->request->all());
        $logger = $this->get_logger($container);
        


        $payzen_response = new PayzenResponse(
            $parameters,
            $payzen_service->get_ctx_mode(),
            $payzen_service->get_key_test(),
            $payzen_service->get_key_prod(),
            $payzen_service->get_sign_algo()
        );

    }

    /**
     * @return \Monolog\Logger
     */
    public function get_logger(ContainerInterface $container)
    {
        // Create the logger
        $log_file_name = date('Y_m') . '_payzen';
        $logger = new Logger($log_file_name);

        // Now add some handlers
        $log_dir = $container->get('kernel')->getLogDir();
        $logger->pushHandler(new StreamHandler($log_dir . '/' . $log_file_name . '.log', Logger::DEBUG));
        $logger->pushHandler(new FirePHPHandler());
        return $logger;
    }
}

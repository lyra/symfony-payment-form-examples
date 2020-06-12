<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen Bundle for Symfony. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra-network.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/mit-license.html The MIT License (MIT)
 */

namespace Lyra\PayzenBundle\Payzen;

use Lyra\PayzenBundle\Includes\PayzenRequest;
use Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;
/**
 * Main bundle service.
 */
class PayzenService
{
   // use ControllerTrait;
  //  use ContainerAwareTrait;


    //render twig
    private $twig;

    /**
    * @var string
    */
    private $site_id;

    /**
     * @var string
     */
    private $key_test;

    /**
     * @var string
     */
    private $key_prod;

    /**
     * @var string
     */
    private $ctx_mode;

    /**
     * @var string
     */
    private $sign_algo;

    /**
     * @var string
     */
    private $platform_url;

    /**
     * @var PayzenRequest
     */
    private $payzen_request;

    /**
     * @return string
     */
    public function get_sign_algo()
    {
        return $this->sign_algo;
    }

    /**
     * @return string
     */
    public function get_key_test()
    {
        return $this->key_test;
    }

    /**
     * @return string
     */
    public function get_key_prod()
    {
        return $this->key_prod;
    }

    /**
     * @return string
     */
    public function get_ctx_mode()
    {
        return $this->ctx_mode;
    }

    /**
     * @return string
     */
    public function get_platform_url()
    {
        return $this->platform_url;
    }

    /**
     * @return PayzenRequest
     */
    public function get_payzen_request(){
        return $this->payzen_request;
    }

    /**
     *
     * @param $site_id
     * @param $key_test
     * @param $key_prod
     * @param $ctx_mode
     * @param $sign_algo
     * @param $platform_url
     * @throws \Exception
     */
    public function __construct($site_id, $key_test, $key_prod, $ctx_mode, $sign_algo, $platform_url ,Environment $twig)
    {
        $this->payzen_request = new PayzenRequest();
        if (!$this->payzen_request->set('site_id', $site_id)) {
            throw new \Exception(sprintf('Wrong Payzen Shop ID defined, "%s" given', $site_id));
        }

        if (!$this->payzen_request->set('ctx_mode', $ctx_mode)) {
            throw new \Exception(sprintf('Wrong Payzen mode ("TEST" or "PROD"), "%s" given', $ctx_mode));
        }

        if ($ctx_mode === 'TEST') {
            if (!$this->payzen_request->set('key_test', $key_test)) {
                throw new \Exception(sprintf('Wrong Payzen Certificate in test mode, "%s" given', $key_test));
            }
        } else {
            if (!$this->payzen_request->set('key_prod', $key_prod)) {
                throw new \Exception(sprintf('Wrong Payzen Certificate in production mode , "%s" given', $key_prod));
            }
        }

        if (!$this->payzen_request->set('sign_algo', $sign_algo)) {
            throw new \Exception(sprintf('Wrong Payzen Signature algorithm ("SHA-1" or "SHA-256"), "%s" given', $sign_algo));
        }

        if (!$this->payzen_request->setPlatformUrl($platform_url)) {
            throw new \Exception(sprintf('Wrong Payzen Payment page URL , "%s" given', $platform_url));
        }

        $this->site_id = $site_id;
        $this->key_test = $key_test;
        $this->key_prod = $key_prod;
        $this->ctx_mode = $ctx_mode;
        $this->sign_algo = $sign_algo;
        $this->platform_url = $platform_url;
        $this->twig=$twig;
    }

    public function setRequestParams($request_parameters, ContainerInterface $container)
    {
        foreach ($request_parameters as $name => $value) {
            $this->payzen_request->set($name, $value);
        }

        if (!$this->payzen_request->get('url_return')) {
            $url_return = $container->get('router')->generate('paymentResponse', [], UrlGeneratorInterface::ABSOLUTE_URL);
            $this->payzen_request->set('url_return', $url_return);
        }

        if (!$this->payzen_request->get('return_mode')) {
            $this->payzen_request->set('return_mode', 'GET');
        }

        return $this->payzenRender($container);
    }

    private function payzenRender(ContainerInterface $container)
    {
       // $this->setContainer($container);

        return $this->twig->render('@Payzen/payzen_form_submit.html.twig', [
            'params' => $this->payzen_request->getRequestFieldsArray(),
            'params_log' => $this->payzen_request->getRequestFieldsArray(true /* to hide sensitive data */)
        ]);
    }
}

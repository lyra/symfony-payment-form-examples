<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Lyra\PayzenBundle\Payzen\PayzenService;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;
use Monolog\Logger;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Invoince;
use DateTime;
use Lyra\PayzenBundle\Includes\PayzenParamsUrl;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PayzenRedirectController extends AbstractController

{
        /**
         * @Route("/payzenRedirectForm/number3")
         */
        public function number()
        {
            $number = random_int(0, 100);

            return $this->render('payzenRedirectForm/number.html.twig', [
                'number' => $number,
            ]);
        }


        /**
         * @Route("/payzenRedirectForm/redirectPaymentLyraExample")
         */
        public function redirect_payment_lyra (PayzenService $payzen,ContainerInterface $container, Request $request)
        {

            $logger = $this->get_logger($container);

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
         * @Route("/payzenRedirectForm/renderForm")
         */
        public function create_form (PayzenService $payzen,ContainerInterface $container, Request $request)
        {

            $logger = $this->get_logger($container);

            $logger->info("se inicializa el formulario para la prueba de post");

            $payzenParamsUrl = new PayzenParamsUrl();

            $logger->info("se inicializa el formulario para la prueba de post");

            $payzenParamsUrl->setAmount("1000000");
            $payzenParamsUrl->setCaptureDelay("7");
            $payzenParamsUrl->setContrib("TestContrib");
            $payzenParamsUrl->setCurrency("170");
            $payzenParamsUrl->setCustAddress("TestAddress");
            $payzenParamsUrl->setCustCity("TestCity");
            $payzenParamsUrl->setCustCountry("FR");
            $payzenParamsUrl->setCustEmail("testemail@test.com");
            $payzenParamsUrl->setCustFirstName("TestName");
            $payzenParamsUrl->setCustId("1");
            $payzenParamsUrl->setCustLastName("TestLastName");
            $payzenParamsUrl->setCustPhone("33333333333333");
            $payzenParamsUrl->setCustZip("75000");
            $payzenParamsUrl->setLanguage("es");
            $payzenParamsUrl->setOrderId("820f1e8b7bde43fd95e18e3eac6e5644");
            $payzenParamsUrl->setReturnMode("GET");
            $payzenParamsUrl->setAmount("1000000");
            $payzenParamsUrl->setShipToCity("TestCity");
            $payzenParamsUrl->setShipToCountry("FR");
            $payzenParamsUrl->setShipToFirstName("TestName");
            $payzenParamsUrl->setShipToLastName("TestLastName");
            $payzenParamsUrl->setShipToStreet("TestStreet");
            $payzenParamsUrl->setShipToZip("75000");
            $payzenParamsUrl->setShippingAmount("1000");
            $payzenParamsUrl->setTaxRate("19");
            $payzenParamsUrl->setPageAction("PAYMENT");
            

            $form = $this->createFormBuilder($payzenParamsUrl)
            ->add('amount', TextType::class)
            ->add('capture_delay', HiddenType::class)
            ->add('contrib', TextType::class)
            ->add('currency', HiddenType::class)
            ->add('cust_address', TextType::class)
            ->add('cust_city', TextType::class)
            ->add('cust_country', TextType::class)
            ->add('cust_email', TextType::class)
            ->add('cust_last_name', TextType::class)
            ->add('cust_first_name', TextType::class)
            ->add('cust_phone', TextType::class)
            ->add('language', TextType::class)
            ->add('order_id', HiddenType::class)
            ->add('return_mode', HiddenType::class)
            ->add('cust_id', TextType::class)
            ->add('ship_to_city', TextType::class)
            ->add('ship_to_country', TextType::class)
            ->add('ship_to_first_name', TextType::class)
            ->add('ship_to_street', TextType::class)
            ->add('ship_to_zip', TextType::class)
            ->add('shipping_amount', TextType::class)
            ->add('tax_rate', TextType::class , ['label' => 'tax rate %'])
            ->add('page_action', HiddenType::class)
            ->add('Proced_checkout', SubmitType::class, ['label' => 'Checkout'])
            ->setAction($this->generateUrl('payment_lyra'))
            ->getForm();

            return $this->render('payzenRedirectForm/render.form.post.twig', [
                'form' => $form->createView(),
            ]);

        }





        /**
     * @Route("/invoice", name="create_invoice")
     */
    public function createInvoice(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $invoice = new Invoince();
        $invoice->setId($request->query->get("order_id"));
        $invoice->setStatus("PENDING");
        $invoice->setDateCreated(new DateTime());
        $invoice->setTotalAmount($request->query->get("total_amount"));
        $entityManager->persist($invoice);
        $entityManager->flush();
        return new Response('Saved new invoice with id '.$invoice->getId());
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

# SymfonyRedirectExample
PayZen Symfony Example is an open source thant use plugin payzen redirect  that links e-commerce websites based on Symfony framework to PayZen secure payment gateway developed by [Lyra Network](https://www.lyra-network.com/).

this is the link how do you do to install the bundle plugin in your project symfony it ypu want to install in your project symfonya ->
[how to install plugin in your project](Lyra/payzen-bundle)

## Prerequisites
* Symfony 4.0 >=

## Installation

1. clone the project in your prefer folder

2. cd SymfonyRedirectExample

3. symfony server:start 

4 .Configure your database  in this config file enviroment .env 

```
 # customize this line! in .evn in the root path
 DATABASE_URL="mysql://root:Mysql1234@127.0.0.1:3306/Lyra"
```

the url is https://localhost:8000

## Usage get method

For usage for get method

A service 'payzen_service' allows you to get a form rendering containing parameters to be sent to the PayZen payment plateforme.

example:

for user this you can call 

this query string  like example , 

https://localhost:8000/payzenRedirectForm/redirectPaymentLyra?amount=1000000&capture_delay=7&contrib=TestContrib&currency=170&cust_address=TestAddress&cust_city=TestCity&cust_country=FR&cust_email=Test_mail%40test.com&cust_first_name=TestName&cust_id=1&cust_last_name=TestLastName&cust_phone=33333333333333&cust_zip=75000&language=es&order_id=820f1e8b7bde43fd95e18e3eac6e5644&return_mode=GET&ship_to_city=TestCity&ship_to_country=FR&ship_to_first_name=TestName&ship_to_last_name=TestLastName&ship_to_street=TestStreet&ship_to_zip=75000&shipping_amount=325&tax_rate=19&page_action=PAYMENT

replace localhost with domain your project 


## Usage post method

Is nesesary for user post method the name form elements, the form html should attributes names like this form[name],
example :

```html

<form name="form" method="post" action="/payzenRedirectForm/PaymentLyra">
    <div id="form">
        <div class="form-group">
            <label for="form_amount" class="required">Amount</label>
            <input type="text" id="form_amount" name="form[amount]" required="required" class="form-control"
                value="1000000">
        </div>
        <input type="hidden" id="form_capture_delay" name="form[capture_delay]" value="7">
        <div class="form-group">
            <label for="form_contrib" class="required">Contrib</label>
            <input type="text" id="form_contrib" name="form[contrib]" required="required" class="form-control"
                value="TestContrib">
       </div>
       <input type="hidden" id="form_currency" name="form[currency]" value="170">
       <div class="form-group"><label for="form_cust_address" class="required">Cust address</label><input type="text"
                id="form_cust_address" name="form[cust_address]" required="required" class="form-control"
                value="TestAddress"></div>
       <div class="form-group"><label for="form_cust_city" class="required">Cust city</label><input type="text"
                id="form_cust_city" name="form[cust_city]" required="required" class="form-control" value="TestCity">
       </div>
       <div class="form-group"><label for="form_cust_country" class="required">Cust country</label><input type="text"
                id="form_cust_country" name="form[cust_country]" required="required" class="form-control" value="FR">
       </div>
       <div class="form-group"><label for="form_cust_email" class="required">Cust email</label><input type="text"
                id="form_cust_email" name="form[cust_email]" required="required" class="form-control"
                value="testemail@test.com"></div>
       <div class="form-group"><label for="form_cust_last_name" class="required">Cust last name</label><input
                type="text" id="form_cust_last_name" name="form[cust_last_name]" required="required"
                class="form-control" value="TestLastName"></div>
       <div class="form-group"><label for="form_cust_first_name" class="required">Cust first name</label><input
                type="text" id="form_cust_first_name" name="form[cust_first_name]" required="required"
                class="form-control" value="TestName"></div>
       <div class="form-group"><label for="form_cust_phone" class="required">Cust phone</label><input type="text"
                id="form_cust_phone" name="form[cust_phone]" required="required" class="form-control"
                value="33333333333333"></div>
       <div class="form-group"><label for="form_language" class="required">Language</label><input type="text"
                id="form_language" name="form[language]" required="required" class="form-control" value="es"></div>
       <input type="hidden" id="form_order_id" name="form[order_id]" value="820f1e8b7bde43fd95e18e3eac6e5644"><input
            type="hidden" id="form_return_mode" name="form[return_mode]" value="GET">
       <div class="form-group"><label for="form_cust_id" class="required">Cust id</label><input type="text"
                id="form_cust_id" name="form[cust_id]" required="required" class="form-control" value="1"></div>
       <div class="form-group"><label for="form_ship_to_city" class="required">Ship to city</label><input type="text"
                id="form_ship_to_city" name="form[ship_to_city]" required="required" class="form-control"
                value="TestCity"></div>
       <div class="form-group"><label for="form_ship_to_country" class="required">Ship to country</label><input
                type="text" id="form_ship_to_country" name="form[ship_to_country]" required="required"
                class="form-control" value="FR"></div>
       <div class="form-group"><label for="form_ship_to_first_name" class="required">Ship to first name</label><input
                type="text" id="form_ship_to_first_name" name="form[ship_to_first_name]" required="required"
                class="form-control" value="TestName"></div>
       <div class="form-group"><label for="form_ship_to_street" class="required">Ship to street</label><input
                type="text" id="form_ship_to_street" name="form[ship_to_street]" required="required"
                class="form-control" value="TestStreet"></div>
       <div class="form-group"><label for="form_ship_to_zip" class="required">Ship to zip</label><input type="text"
                id="form_ship_to_zip" name="form[ship_to_zip]" required="required" class="form-control" value="75000">
       </div>
       <div class="form-group"><label for="form_shipping_amount" class="required">Shipping amount</label><input
                type="text" id="form_shipping_amount" name="form[shipping_amount]" required="required"
                class="form-control" value="1000"></div>
       <div class="form-group"><label for="form_tax_rate" class="required">tax rate %</label><input type="text"
                id="form_tax_rate" name="form[tax_rate]" required="required" class="form-control" value="19"></div>
       <input type="hidden" id="form_page_action" name="form[page_action]" value="PAYMENT">
       <div class="form-group"><button type="submit" id="form_Proced_checkout" name="form[Proced_checkout]"
                class="btn-primary btn">Checkout</button></div><input type="hidden" id="form__token" name="form[_token]"
            value="X-ff0X8M8UhjdwamkRu4VR1YQaB4TaGjpuAFfriLxJs">
    </div>
</form>
```

go to this link fro see the example :

https://localhost:8000/payzenRedirectForm/renderForm

the method the render form is in this controller [PayzenRedirectController](src/Controller/PayzenRedirectController.php)

```php
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
```



## Usage manage call back lyra from IPN 

if you manage callback from gateway from payzen implement this method


the method for develop your mangage callback is her 
 
 [Manage callback](Lyra/payzen-bundle/Controller/PayzenController.php)
 
 ```php
 //lyra/payzen-bundle/controller/PayzenController.php

 public function manageCallbackPayment($parameters,InvoinceRepository $invoinceRepository, Logger $logger){


        //YOUR CODE HERE

        //Example save the rensponse in a table invoice repository

        $logger->info(" gets entity manager");
        $entityManager = $this->getDoctrine()->getManager();
        $logger->info(" gets invoice in database with the invoice #".$parameters["vads_order_id"]);
        $invoice = $entityManager->getRepository(Invoince::class)->find($parameters["vads_order_id"]);
        //$invoinceRepository->find( );

        $logger->info("verify is invoce gets is good ");
        if (!$invoice) {
            throw $this->createNotFoundException(
                "No invoice found for id "
            );
        }
        $logger->info("amount call back ".$parameters["vads_amount"]);
        $logger->info("amount from database ".$invoice->getTotalAmount());
        $logger->info("the amount is compare within the callback : ".bccomp( $invoice->getTotalAmount(), $parameters["vads_amount"]));

        $invoice->setDatePayment(new DateTime());
        $invoice->setCustName($parameters["vads_cust_first_name"]);
        $invoice->setCustLastName($parameters["vads_cust_last_name"]);
        $invoice->setIdentityNumber($parameters["vads_cust_national_id"]);
        if(bccomp( $invoice->getTotalAmount(), $parameters["vads_amount"]) ==  0){
            $invoice->setStatus("PAYMENT_SUCESS");
            $entityManager->flush();
        }else{
            $invoice->setStatus("DIFERENTS_AMOUNTS");
            $entityManager->flush();
            return false;
        }
 }

 ```
  this example update invoice that generate invoice in the controller
  
  [controller create invoice](src/Controller/PayzenRedirectController.php)

 ```php
 
 //src/Controller/PayzenRedirectController.php
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

  ```
 
## License

Each PayZen payment plugin source file included in this distribution is licensed under the MIT license (MIT).

Please see LICENSE.txt for the full text of the MIT license. It is also available through the world-wide-web at this URL: https://opensource.org/licenses/mit-license.html.





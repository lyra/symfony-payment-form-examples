<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen Bundle for Symfony. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra-network.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/mit-license.html The MIT License (MIT)
 */

namespace App\Services;

use App\Services\IpnSubscriber;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;


class ManageSubscriberIpn{


      //render twig
      private $dispatcher;

        /**
     *
     * @throws \Exception
     */
    public function __construct(ContainerInterface $container)
    {  
        $logger = $this->get_logger($container);


        $subscriber = new IpnSubscriber();
        $this->dispatcher->addSubscriber($subscriber);
        $logger->info('Payment successfull, let\'s save order #');
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
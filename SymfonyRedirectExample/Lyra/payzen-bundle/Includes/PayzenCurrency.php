<?php
/**
 * Copyright © Lyra Network.
 * This file is part of PayZen Bundle for Symfony. See COPYING.md for license details.
 *
 * @author    Lyra Network (https://www.lyra-network.com/)
 * @copyright Lyra Network
 * @license   https://opensource.org/licenses/mit-license.html The MIT License (MIT)
 */

namespace Lyra\PayzenBundle\Includes;

if (! class_exists('PayzenCurrency', false)) {

    /**
     * Class representing a currency, used for converting alpha/numeric ISO codes and float/integer amounts.
     */
    class PayzenCurrency
    {

        private $alpha3;
        private $num;
        private $decimals;

        public function __construct($alpha3, $num, $decimals = 2)
        {
            $this->alpha3 = $alpha3;
            $this->num = $num;
            $this->decimals = $decimals;
        }

        public function convertAmountToInteger($float)
        {
            $coef = pow(10, $this->decimals);

            $amount = $float * $coef;
            return (int) (string) $amount; // Cast amount to string (to avoid rounding) than return it as int.
        }

        public function convertAmountToFloat($integer)
        {
            $coef = pow(10, $this->decimals);

            return ((float) $integer) / $coef;
        }

        public function getAlpha3()
        {
            return $this->alpha3;
        }

        public function getNum()
        {
            return $this->num;
        }

        public function getDecimals()
        {
            return $this->decimals;
        }
    }
}

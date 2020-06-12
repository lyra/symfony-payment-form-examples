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


class PayzenParamsUrl
{
    /**
     * Value of vads_action_mode.
     *
     * @var string
     */
    private $action_mode;

    /**
     * Value of vads_trans_id.
     *
     * @var string
     */
    private $trans_id;

    /**
     * Value of vads_amount.
     *
     * @var string
     */
    private $amount;

    /**
     * Value of vads_threeds_mpi.
     *
     * @var string
     */
    private $threeds_mpi;

    


    /**
     * Value of vads_capture_delay.
     *
     * @var string
     */
    private $capture_delay;

    /**
     * Value of vads_contrib.
     *
     * @var string
     */
    private $contrib;

   

    /**
     * Value of vads_currency.
     *
     * @var string
     */
    private $currency;

    /**
     * Value of vads_cust_address.
     *
     * @var string
     */
    private $cust_address;

    /**
     * Value of vads_cust_city.
     *
     * @var string
     */
    private $cust_city;

    /**
     * Value of vads_cust_state.
     *
     * @var string
     */
    private $cust_state;

    /**
     * Value of vads_cust_country.
     *
     * @var string
     */
    private $cust_country;

    /**
     * Value of vads_cust_email.
     *
     * @var string
     */
    private $cust_email;

    /**
     * Value of vads_cust_first_name.
     *
     * @var string
     */
    private $cust_first_name;

    /**
     * Value of vads_cust_id.
     *
     * @var string
     */
    private $cust_id;

    /**
     * Value of vads_cust_last_name.
     *
     * @var string
     */
    private $cust_last_name;


    /**
     * Value of vads_cust_legal_name.
     *
     * @var string
     */
    private $cust_legal_name;

    

    /**
     * Value of vads_cust_phone.
     *
     * @var string
     */
    private $cust_phone;

    /**
     * Value of vads_cust_zip.
     *
     * @var string
     */
    private $cust_zip;
    

    /**
     * Value of vads_cust_title.
     *
     * @var string
     */
    private $cust_title;

    /**
     * Value of vads_cust_status.
     *
     * @var string
     */
    private $cust_status;

    /**
     * Value of vads_cust_address_number.
     *
     * @var string
     */
    private $cust_address_number;

    /**
     * Value of vads_cust_address2.
     *
     * @var string
     */
    private $cust_address2;

     /**
     * Value of vads_cust_district.
     *
     * @var string
     */
    private $cust_district;

    

    /**
     * Value of vads_language.
     *
     * @var string
     */
    private $language;

    /**
     * Value of vads_order_id.
     *
     * @var string
     */
    private $order_id;


    /**
     * Value of vads_order_info.
     *
     * @var string
     */
    private $order_info;

    /**
     * Value of vads_nb_products.
     *
     * @var string
     */
    private $vads_nb_products;

    /**
     * Value of vads_product_typeN.
     *
     * @var string
     */
    private $vads_product_typeN;


    /**
     * Value of vads_product_typeN.
     *
     * @var string
     */
    private $product_refN;

   /**
     * Value of vads_product_qtyN.
     *
     * @var string
     */
    private $product_qtyN;    

    /**
     * Value of vads_product_ext_idN.
     *
     * @var string
     */
    private $product_ext_idN;


    /**
     * Value of vads_product_ext_idN.
     *
     * @var string
     */
    private $product_labelN;

    

    /**
     * Value of vads_order_info2.
     *
     * @var string
     */
    private $order_info2;

    /**
     * Value of vads_page_action.
     *
     * @var string
     */
    private $page_action;

    /**
     * Value of vads_payment_config.
     *
     * @var string
     */
    private $payment_config;

    /**
     * Value of vads_return_mode.
     *
     * @var string
     */
    private $return_mode;

    /**
     * Value of vads_ship_to_city.
     *
     * @var string
     */
    private $ship_to_city;

    /**
     * Value of vads_ship_to_country.
     *
     * @var string
     */
    private $ship_to_country;


    /**
     * Value of vads_ship_to_district.
     *
     * @var string
     */
    private $ship_to_district;

    /**
     * Value of vads_ship_to_state.
     *
     * @var string
     */
    private $ship_to_state;

    /**
     * Value of vads_ship_to_first_name.
     *
     * @var string
     */
    private $ship_to_first_name;

    /**
     * Value of vads_ship_to_last_name.
     *
     * @var string
     */
    private $ship_to_last_name;


    /**
     * Value of vads_ship_to_legal_name.
     *
     * @var string
     */
    private $ship_to_legal_name;


    /**
     * Value of vads_ship_to_phone_num.
     *
     * @var string
     */
    private $ship_to_phone_num;

    /**
     * Value of vads_ship_to_street.
     *
     * @var string
     */
    private $ship_to_street;


    /**
     * Value of vads_ship_to_zip.
     *
     * @var string
     */
    private $ship_to_zip;

    

    /**
     * Value of vads_shipping_amount.
     *
     * @var string
     */
    private $shipping_amount;


    /**
     * Value of vads_ship_to_status.
     *
     * @var string
     */
    private $ship_to_status;


    /**
     * Value of vads_ship_to_street_number.
     *
     * @var string
     */
    private $ship_to_street_number;


     /**
     * Value of vads_ship_to_street2.
     *
     * @var string
     */
    private $vads_ship_to_street2;


    

    /**
     * Value of vads_site_id.
     *
     * @var string
     */
    private $site_id;


    /**
     * Value of vads_totalamount_vat.
     *
     * @var string
     */
    private $totalamount_vat;

     /**
     * Value of vads_totalamount_vat.
     *
     * @var string
     */
    private $tax_rate;

    /**
     * Value of vads_trans_date.
     *
     * @var string
     */
    private $trans_date;



    /**
     * Value of vads_url_return.
     *
     * @var string
     */
    private $url_return;


     /**
     * Value of vads_url_cancel.
     *
     * @var string
     */
    private $url_cancel;

    /**
     * Value of vads_url_error.
     *
     * @var string
     */
    private $url_error;

    /**
     * Value of vads_url_refused.
     *
     * @var string
     */
    private $url_refused;


    /**
     * Value of vads_url_success.
     *
     * @var string
     */
    private $url_success;

    /**
     * Value of vads_contracts.
     *
     * @var string
     */
    private $contracts;

    

    /**
     * Value of vads_url_check.
     *
     * @var string
     */
    private $url_check;


    

    /**
     * Value of vads_redirect_success_timeout.
     *
     * @var string
     */
    private $redirect_success_timeout;


    /**
     * Value of vads_redirect_success_message.
     *
     * @var string
     */
    private $redirect_success_message;


    /**
     * Value of vads_redirect_error_timeout.
     *
     * @var string
     */
    private $redirect_error_timeout;


    /**
     * Value of vads_payment_option_code.
     *
     * @var string
     */
    private $payment_option_code;   


    /**
     * Value of vads_redirect_error_message.
     *
     * @var string
     */
    private $redirect_error_message; 


    /**
     * Value of vads_version.
     *
     * @var string
     */
    private $version;


    

    /**
     * Value of signature.
     *
     * @var string
     */
    private $signature;


    
    
    

    /**
     * Get value of vads_action_mode.
     *
     * @return  string
     */ 
    public function getAction_mode()
    {
        return $this->action_mode;
    }

    /**
     * Set value of vads_action_mode.
     *
     * @param  string  $action_mode  Value of vads_action_mode.
     *
     * @return  self
     */ 
    public function setAction_mode(string $action_mode)
    {
        $this->action_mode = $action_mode;

        return $this;
    }

    /**
     * Get value of vads_amount.
     *
     * @return  string
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set value of vads_amount.
     *
     * @param  string  $amount  Value of vads_amount.
     *
     * @return  self
     */ 
    public function setAmount(string $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get value of vads_capture_delay.
     *
     * @return  string
     */ 
    public function getCapturedelay()
    {
        return $this->capture_delay;
    }

    /**
     * Set value of vads_capture_delay.
     *
     * @param  string  $capture_delay  Value of vads_capture_delay.
     *
     * @return  self
     */ 
    public function setCaptureDelay(string $capture_delay)
    {
        $this->capture_delay = $capture_delay;

        return $this;
    }

    /**
     * Get value of vads_contrib.
     *
     * @return  string
     */ 
    public function getContrib()
    {
        return $this->contrib;
    }

    /**
     * Set value of vads_contrib.
     *
     * @param  string  $contrib  Value of vads_contrib.
     *
     * @return  self
     */ 
    public function setContrib(string $contrib)
    {
        $this->contrib = $contrib;

        return $this;
    }

    /**
     * Get value of vads_ctx_mode.
     *
     * @return  string
     */ 
    public function getCtxMode()
    {
        return $this->ctx_mode;
    }

    /**
     * Set value of vads_ctx_mode.
     *
     * @param  string  $ctx_mode  Value of vads_ctx_mode.
     *
     * @return  self
     */ 
    public function setCtxMode(string $ctx_mode)
    {
        $this->ctx_mode = $ctx_mode;

        return $this;
    }

    /**
     * Get value of vads_currency.
     *
     * @return  string
     */ 
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set value of vads_currency.
     *
     * @param  string  $currency  Value of vads_currency.
     *
     * @return  self
     */ 
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get value of vads_cust_address.
     *
     * @return  string
     */ 
    public function getCustAddress()
    {
        return $this->cust_address;
    }

    

    /**
     * Set value of vads_cust_address.
     *
     * @param  string  $cust_address  Value of vads_cust_address.
     *
     * @return  self
     */ 
    public function setCustAddress(string $cust_address)
    {
        $this->cust_address = $cust_address;

        return $this;
    }

    /**
     * Get value of vads_cust_city.
     *
     * @return  string
     */ 
    public function getCustCity()
    {
        return $this->cust_city;
    }
    

    /**
     * Set value of vads_cust_city.
     *
     * @param  string  $cust_city  Value of vads_cust_city.
     *
     * @return  self
     */ 
    public function setCustCity(string $cust_city)
    {
        $this->cust_city = $cust_city;

        return $this;
    }

    /**
     * Get value of vads_cust_country.
     *
     * @return  string
     */ 
    public function getCustCountry()
    {
        return $this->cust_country;
    }

    /**
     * Set value of vads_cust_country.
     *
     * @param  string  $cust_country  Value of vads_cust_country.
     *
     * @return  self
     */ 
    public function setCustCountry(string $cust_country)
    {
        $this->cust_country = $cust_country;

        return $this;
    }

    /**
     * Get value of vads_cust_email.
     *
     * @return  string
     */ 
    public function getCustEmail()
    {
        return $this->cust_email;
    }

    /**
     * Set value of vads_cust_email.
     *
     * @param  string  $cust_email  Value of vads_cust_email.
     *
     * @return  self
     */ 
    public function setCustEmail(string $cust_email)
    {
        $this->cust_email = $cust_email;

        return $this;
    }

    /**
     * Get value of vads_cust_first_name.
     *
     * @return  string
     */ 
    public function getCustFirstName()
    {
        return $this->cust_first_name;
    }

    /**
     * Set value of vads_cust_first_name.
     *
     * @param  string  $cust_first_name  Value of vads_cust_first_name.
     *
     * @return  self
     */ 
    public function setCustFirstName(string $cust_first_name)
    {
        $this->cust_first_name = $cust_first_name;

        return $this;
    }

    /**
     * Get value of vads_cust_id.
     *
     * @return  string
     */ 
    public function getCustId()
    {
        return $this->cust_id;
    }

    /**
     * Set value of vads_cust_id.
     *
     * @param  string  $cust_id  Value of vads_cust_id.
     *
     * @return  self
     */ 
    public function setCustId(string $cust_id)
    {
        $this->cust_id = $cust_id;

        return $this;
    }

    /**
     * Get value of vads_cust_last_name.
     *
     * @return  string
     */ 
    public function getCustLastName()
    {
        return $this->cust_last_name;
    }

    /**
     * Set value of vads_cust_last_name.
     *
     * @param  string  $cust_last_name  Value of vads_cust_last_name.
     *
     * @return  self
     */ 
    public function setCustLastName(string $cust_last_name)
    {
        $this->cust_last_name = $cust_last_name;

        return $this;
    }

    /**
     * Get value of vads_cust_phone.
     *
     * @return  string
     */ 
    public function getCustPhone()
    {
        return $this->cust_phone;
    }

    /**
     * Set value of vads_cust_phone.
     *
     * @param  string  $cust_phone  Value of vads_cust_phone.
     *
     * @return  self
     */ 
    public function setCustPhone(string $cust_phone)
    {
        $this->cust_phone = $cust_phone;

        return $this;
    }

    /**
     * Get value of vads_cust_zip.
     *
     * @return  string
     */ 
    public function getCustZip()
    {
        return $this->cust_zip;
    }

    /**
     * Set value of vads_cust_zip.
     *
     * @param  string  $cust_zip  Value of vads_cust_zip.
     *
     * @return  self
     */ 
    public function setCustZip(string $cust_zip)
    {
        $this->cust_zip = $cust_zip;

        return $this;
    }

    /**
     * Get value of vads_language.
     *
     * @return  string
     */ 
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set value of vads_language.
     *
     * @param  string  $language  Value of vads_language.
     *
     * @return  self
     */ 
    public function setLanguage(string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get value of vads_order_id.
     *
     * @return  string
     */ 
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Set value of vads_order_id.
     *
     * @param  string  $order_id  Value of vads_order_id.
     *
     * @return  self
     */ 
    public function setOrderId(string $order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * Get value of vads_page_action.
     *
     * @return  string
     */ 
    public function getPageAction()
    {
        return $this->page_action;
    }

    /**
     * Set value of vads_page_action.
     *
     * @param  string  $page_action  Value of vads_page_action.
     *
     * @return  self
     */ 
    public function setPageAction(string $page_action)
    {
        $this->page_action = $page_action;

        return $this;
    }

    /**
     * Get value of vads_payment_config.
     *
     * @return  string
     */ 
    public function getPaymentConfig()
    {
        return $this->payment_config;
    }

    /**
     * Set value of vads_payment_config.
     *
     * @param  string  $payment_config  Value of vads_payment_config.
     *
     * @return  self
     */ 
    public function setPaymentConfig(string $payment_config)
    {
        $this->payment_config = $payment_config;

        return $this;
    }

    /**
     * Get value of vads_return_mode.
     *
     * @return  string
     */ 
    public function getReturnMode()
    {
        return $this->return_mode;
    }

    /**
     * Set value of vads_return_mode.
     *
     * @param  string  $return_mode  Value of vads_return_mode.
     *
     * @return  self
     */ 
    public function setReturnMode(string $return_mode)
    {
        $this->return_mode = $return_mode;

        return $this;
    }

    /**
     * Get value of vads_ship_to_city.
     *
     * @return  string
     */ 
    public function getShipToCity()
    {
        return $this->ship_to_city;
    }

    /**
     * Set value of vads_ship_to_city.
     *
     * @param  string  $ship_to_city  Value of vads_ship_to_city.
     *
     * @return  self
     */ 
    public function setShipToCity(string $ship_to_city)
    {
        $this->ship_to_city = $ship_to_city;

        return $this;
    }

    /**
     * Get value of vads_ship_to_country.
     *
     * @return  string
     */ 
    public function getShipToCountry()
    {
        return $this->ship_to_country;
    }

    /**
     * Set value of vads_ship_to_country.
     *
     * @param  string  $ship_to_country  Value of vads_ship_to_country.
     *
     * @return  self
     */ 
    public function setShipToCountry(string $ship_to_country)
    {
        $this->ship_to_country = $ship_to_country;

        return $this;
    }

    /**
     * Get value of vads_ship_to_first_name.
     *
     * @return  string
     */ 
    public function getShipToFirstName()
    {
        return $this->ship_to_first_name;
    }

    /**
     * Set value of vads_ship_to_first_name.
     *
     * @param  string  $ship_to_first_name  Value of vads_ship_to_first_name.
     *
     * @return  self
     */ 
    public function setShipToFirstName(string $ship_to_first_name)
    {
        $this->ship_to_first_name = $ship_to_first_name;

        return $this;
    }

    /**
     * Get value of vads_ship_to_last_name.
     *
     * @return  string
     */ 
    public function getShipToLastName()
    {
        return $this->ship_to_last_name;
    }

    /**
     * Set value of vads_ship_to_last_name.
     *
     * @param  string  $ship_to_last_name  Value of vads_ship_to_last_name.
     *
     * @return  self
     */ 
    public function setShipToLastName(string $ship_to_last_name)
    {
        $this->ship_to_last_name = $ship_to_last_name;

        return $this;
    }

    /**
     * Get value of vads_ship_to_street.
     *
     * @return  string
     */ 
    public function getShipToStreet()
    {
        return $this->ship_to_street;
    }

    /**
     * Set value of vads_ship_to_street.
     *
     * @param  string  $ship_to_street  Value of vads_ship_to_street.
     *
     * @return  self
     */ 
    public function setShipToStreet(string $ship_to_street)
    {
        $this->ship_to_street = $ship_to_street;

        return $this;
    }

    /**
     * Get value of vads_ship_to_zip.
     *
     * @return  string
     */ 
    public function getShipToZip()
    {
        return $this->ship_to_zip;
    }

    /**
     * Set value of vads_ship_to_zip.
     *
     * @param  string  $ship_to_zip  Value of vads_ship_to_zip.
     *
     * @return  self
     */ 
    public function setShipToZip(string $ship_to_zip)
    {
        $this->ship_to_zip = $ship_to_zip;

        return $this;
    }

    /**
     * Get value of vads_shipping_amount.
     *
     * @return  string
     */ 
    public function getShippingAmount()
    {
        return $this->shipping_amount;
    }

    /**
     * Set value of vads_shipping_amount.
     *
     * @param  string  $shipping_amount  Value of vads_shipping_amount.
     *
     * @return  self
     */ 
    public function setShippingAmount(string $shipping_amount)
    {
        $this->shipping_amount = $shipping_amount;

        return $this;
    }

    /**
     * Get value of vads_site_id.
     *
     * @return  string
     */ 
    public function getSiteId()
    {
        return $this->site_id;
    }

    /**
     * Set value of vads_site_id.
     *
     * @param  string  $site_id  Value of vads_site_id.
     *
     * @return  self
     */ 
    public function setSiteId(string $site_id)
    {
        $this->site_id = $site_id;

        return $this;
    }

    /**
     * Get value of vads_totalamount_vat.
     *
     * @return  string
     */ 
    public function getTotalamountVat()
    {
        return $this->totalamount_vat;
    }

    /**
     * Set value of vads_totalamount_vat.
     *
     * @param  string  $totalamount_vat  Value of vads_totalamount_vat.
     *
     * @return  self
     */ 
    public function setTotalamountVat(string $totalamount_vat)
    {
        $this->totalamount_vat = $totalamount_vat;

        return $this;
    }

    /**
     * Get value of vads_trans_date.
     *
     * @return  string
     */ 
    public function getTransDate()
    {
        return $this->trans_date;
    }

    /**
     * Set value of vads_trans_date.
     *
     * @param  string  $trans_date  Value of vads_trans_date.
     *
     * @return  self
     */ 
    public function setTransDate(string $trans_date)
    {
        $this->trans_date = $trans_date;

        return $this;
    }

    /**
     * Get value of vads_trans_id.
     *
     * @return  string
     */ 
    public function getTransId()
    {
        return $this->trans_id;
    }

    /**
     * Set value of vads_trans_id.
     *
     * @param  string  $trans_id  Value of vads_trans_id.
     *
     * @return  self
     */ 
    public function setTransId(string $trans_id)
    {
        $this->trans_id = $trans_id;

        return $this;
    }

    /**
     * Get value of vads_url_return.
     *
     * @return  string
     */ 
    public function getUrlReturn()
    {
        return $this->url_return;
    }

    /**
     * Set value of vads_url_return.
     *
     * @param  string  $url_return  Value of vads_url_return.
     *
     * @return  self
     */ 
    public function setUrlReturn(string $url_return)
    {
        $this->url_return = $url_return;

        return $this;
    }

    /**
     * Get value of vads_version.
     *
     * @return  string
     */ 
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set value of vads_version.
     *
     * @param  string  $version  Value of vads_version.
     *
     * @return  self
     */ 
    public function setVersion(string $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get value of vads_totalamount_vat.
     *
     * @return  string
     */ 
    public function getTaxRate()
    {
        return $this->tax_rate;
    }

    /**
     * Set value of vads_totalamount_vat.
     *
     * @param  string  $tax_rate  Value of vads_totalamount_vat.
     *
     * @return  self
     */ 
    public function setTaxRate(string $tax_rate)
    {
        $this->tax_rate = $tax_rate;

        return $this;
    }

    /**
     * Get value of vads_url_cancel.
     *
     * @return  string
     */ 
    public function getUrlCancel()
    {
        return $this->url_cancel;
    }

    /**
     * Set value of vads_url_cancel.
     *
     * @param  string  $url_cancel  Value of vads_url_cancel.
     *
     * @return  self
     */ 
    public function setUrlCancel(string $url_cancel)
    {
        $this->url_cancel = $url_cancel;

        return $this;
    }

    /**
     * Get value of vads_url_error.
     *
     * @return  string
     */ 
    public function getUrlError()
    {
        return $this->url_error;
    }

    /**
     * Set value of vads_url_error.
     *
     * @param  string  $url_error  Value of vads_url_error.
     *
     * @return  self
     */ 
    public function setUrlError(string $url_error)
    {
        $this->url_error = $url_error;

        return $this;
    }

    /**
     * Get value of vads_url_refused.
     *
     * @return  string
     */ 
    public function getUrlRefused()
    {
        return $this->url_refused;
    }

    /**
     * Set value of vads_url_refused.
     *
     * @param  string  $url_refused  Value of vads_url_refused.
     *
     * @return  self
     */ 
    public function setUrlRefused(string $url_refused)
    {
        $this->url_refused = $url_refused;

        return $this;
    }

    /**
     * Get value of vads_url_success.
     *
     * @return  string
     */ 
    public function getUrlSuccess()
    {
        return $this->url_success;
    }

    /**
     * Set value of vads_url_success.
     *
     * @param  string  $url_success  Value of vads_url_success.
     *
     * @return  self
     */ 
    public function setUrlSuccess(string $url_success)
    {
        $this->url_success = $url_success;

        return $this;
    }

    /**
     * Get value of vads_redirect_success_timeout.
     *
     * @return  string
     */ 
    public function getRedirectSuccessTimeout()
    {
        return $this->redirect_success_timeout;
    }

    /**
     * Set value of vads_redirect_success_timeout.
     *
     * @param  string  $redirect_success_timeout  Value of vads_redirect_success_timeout.
     *
     * @return  self
     */ 
    public function setRedirectSuccessTimeout(string $redirect_success_timeout)
    {
        $this->redirect_success_timeout = $redirect_success_timeout;

        return $this;
    }

    /**
     * Get value of vads_redirect_success_message.
     *
     * @return  string
     */ 
    public function getRedirectSuccessMessage()
    {
        return $this->redirect_success_message;
    }

    /**
     * Set value of vads_redirect_success_message.
     *
     * @param  string  $redirect_success_message  Value of vads_redirect_success_message.
     *
     * @return  self
     */ 
    public function setRedirectSuccessMessage(string $redirect_success_message)
    {
        $this->redirect_success_message = $redirect_success_message;

        return $this;
    }

    /**
     * Get value of vads_redirect_error_timeout.
     *
     * @return  string
     */ 
    public function getRedirectErrorTimeout()
    {
        return $this->redirect_error_timeout;
    }

    /**
     * Set value of vads_redirect_error_timeout.
     *
     * @param  string  $redirect_error_timeout  Value of vads_redirect_error_timeout.
     *
     * @return  self
     */ 
    public function setRedirectErrorTimeout(string $redirect_error_timeout)
    {
        $this->redirect_error_timeout = $redirect_error_timeout;

        return $this;
    }

    /**
     * Get value of vads_redirect_error_message.
     *
     * @return  string
     */ 
    public function getRedirectErrorMessage()
    {
        return $this->redirect_error_message;
    }

    /**
     * Set value of vads_redirect_error_message.
     *
     * @param  string  $redirect_error_message  Value of vads_redirect_error_message.
     *
     * @return  self
     */ 
    public function setRedirectErrorMessage(string $redirect_error_message)
    {
        $this->redirect_error_message = $redirect_error_message;

        return $this;
    }

    /**
     * Get value of vads_cust_title.
     *
     * @return  string
     */ 
    public function getCustTitle()
    {
        return $this->cust_title;
    }

    /**
     * Set value of vads_cust_title.
     *
     * @param  string  $cust_title  Value of vads_cust_title.
     *
     * @return  self
     */ 
    public function setCustTitle(string $cust_title)
    {
        $this->cust_title = $cust_title;

        return $this;
    }

    /**
     * Get value of vads_cust_status.
     *
     * @return  string
     */ 
    public function getCustStatus()
    {
        return $this->cust_status;
    }

    /**
     * Set value of vads_cust_status.
     *
     * @param  string  $cust_status  Value of vads_cust_status.
     *
     * @return  self
     */ 
    public function setCustStatus(string $cust_status)
    {
        $this->cust_status = $cust_status;

        return $this;
    }

    

    /**
     * Get value of vads_cust_legal_name.
     *
     * @return  string
     */ 
    public function getCustLegalName()
    {
        return $this->cust_legal_name;
    }

    /**
     * Set value of vads_cust_legal_name.
     *
     * @param  string  $cust_legal_name  Value of vads_cust_legal_name.
     *
     * @return  self
     */ 
    public function setCustLegalName(string $cust_legal_name)
    {
        $this->cust_legal_name = $cust_legal_name;

        return $this;
    }

    /**
     * Get value of vads_cust_address_number.
     *
     * @return  string
     */ 
    public function getCustAddressNumber()
    {
        return $this->cust_address_number;
    }

    /**
     * Set value of vads_cust_address_number.
     *
     * @param  string  $cust_address_number  Value of vads_cust_address_number.
     *
     * @return  self
     */ 
    public function setCustAddressNumber(string $cust_address_number)
    {
        $this->cust_address_number = $cust_address_number;

        return $this;
    }

    

    /**
     * Get value of vads_cust_address2.
     *
     * @return  string
     */ 
    public function getCustAddress2()
    {
        return $this->cust_address2;
    }

    /**
     * Set value of vads_cust_address2.
     *
     * @param  string  $cust_address2  Value of vads_cust_address2.
     *
     * @return  self
     */ 
    public function setCustAddress2(string $cust_address2)
    {
        $this->cust_address2 = $cust_address2;

        return $this;
    }

    /**
     * Get value of vads_cust_district.
     *
     * @return  string
     */ 
    public function getCustDistrict()
    {
        return $this->cust_district;
    }

    /**
     * Set value of vads_cust_district.
     *
     * @param  string  $cust_district  Value of vads_cust_district.
     *
     * @return  self
     */ 
    public function setCustDistrict(string $cust_district)
    {
        $this->cust_district = $cust_district;

        return $this;
    }

    /**
     * Get value of vads_cust_state.
     *
     * @return  string
     */ 
    public function getCustState()
    {
        return $this->cust_state;
    }

    /**
     * Set value of vads_cust_state.
     *
     * @param  string  $cust_state  Value of vads_cust_state.
     *
     * @return  self
     */ 
    public function setCustState(string $cust_state)
    {
        $this->cust_state = $cust_state;

        return $this;
    }

    /**
     * Get value of vads_ship_to_district.
     *
     * @return  string
     */ 
    public function getShipToDistrict()
    {
        return $this->ship_to_district;
    }

    /**
     * Set value of vads_ship_to_district.
     *
     * @param  string  $ship_to_district  Value of vads_ship_to_district.
     *
     * @return  self
     */ 
    public function setShipToDistrict(string $ship_to_district)
    {
        $this->ship_to_district = $ship_to_district;

        return $this;
    }

    /**
     * Get value of vads_ship_to_legal_name.
     *
     * @return  string
     */ 
    public function getShipToLegalName()
    {
        return $this->ship_to_legal_name;
    }

    /**
     * Set value of vads_ship_to_legal_name.
     *
     * @param  string  $ship_to_legal_name  Value of vads_ship_to_legal_name.
     *
     * @return  self
     */ 
    public function setShipToLegalName(string $ship_to_legal_name)
    {
        $this->ship_to_legal_name = $ship_to_legal_name;

        return $this;
    }

    /**
     * Get value of vads_ship_to_phone_num.
     *
     * @return  string
     */ 
    public function getShipToPhoneNum()
    {
        return $this->ship_to_phone_num;
    }

    /**
     * Set value of vads_ship_to_phone_num.
     *
     * @param  string  $ship_to_phone_num  Value of vads_ship_to_phone_num.
     *
     * @return  self
     */ 
    public function setShipToPhoneNum(string $ship_to_phone_num)
    {
        $this->ship_to_phone_num = $ship_to_phone_num;

        return $this;
    }

    /**
     * Get value of vads_ship_to_state.
     *
     * @return  string
     */ 
    public function getShipToState()
    {
        return $this->ship_to_state;
    }

    /**
     * Set value of vads_ship_to_state.
     *
     * @param  string  $ship_to_state  Value of vads_ship_to_state.
     *
     * @return  self
     */ 
    public function setShipToState(string $ship_to_state)
    {
        $this->ship_to_state = $ship_to_state;

        return $this;
    }

    /**
     * Get value of vads_ship_to_status.
     *
     * @return  string
     */ 
    public function getShipToStatus()
    {
        return $this->ship_to_status;
    }

    /**
     * Set value of vads_ship_to_status.
     *
     * @param  string  $ship_to_status  Value of vads_ship_to_status.
     *
     * @return  self
     */ 
    public function setShipToStatus(string $ship_to_status)
    {
        $this->ship_to_status = $ship_to_status;

        return $this;
    }

    /**
     * Get value of vads_ship_to_street_number.
     *
     * @return  string
     */ 
    public function getShipToStreetNumber()
    {
        return $this->ship_to_street_number;
    }

    /**
     * Set value of vads_ship_to_street_number.
     *
     * @param  string  $ship_to_street_number  Value of vads_ship_to_street_number.
     *
     * @return  self
     */ 
    public function setShipToStreetNumber(string $ship_to_street_number)
    {
        $this->ship_to_street_number = $ship_to_street_number;

        return $this;
    }

    /**
     * Get value of vads_ship_to_street2.
     *
     * @return  string
     */ 
    public function getVadsShipToStreet2()
    {
        return $this->vads_ship_to_street2;
    }

    /**
     * Set value of vads_ship_to_street2.
     *
     * @param  string  $vads_ship_to_street2  Value of vads_ship_to_street2.
     *
     * @return  self
     */ 
    public function setVadsShipToStreet2(string $vads_ship_to_street2)
    {
        $this->vads_ship_to_street2 = $vads_ship_to_street2;

        return $this;
    }

    /**
     * Get value of vads_order_info.
     *
     * @return  string
     */ 
    public function getOrderInfo()
    {
        return $this->order_info;
    }

    /**
     * Set value of vads_order_info.
     *
     * @param  string  $order_info  Value of vads_order_info.
     *
     * @return  self
     */ 
    public function setOrderInfo(string $order_info)
    {
        $this->order_info = $order_info;

        return $this;
    }

    /**
     * Get value of vads_order_info2.
     *
     * @return  string
     */ 
    public function getOrderInfo2()
    {
        return $this->order_info2;
    }

    /**
     * Set value of vads_order_info2.
     *
     * @param  string  $order_info2  Value of vads_order_info2.
     *
     * @return  self
     */ 
    public function setOrderInfo2(string $order_info2)
    {
        $this->order_info2 = $order_info2;

        return $this;
    }

    /**
     * Get value of vads_nb_products.
     *
     * @return  string
     */ 
    public function getVadsNbProducts()
    {
        return $this->vads_nb_products;
    }

    /**
     * Set value of vads_nb_products.
     *
     * @param  string  $vads_nb_products  Value of vads_nb_products.
     *
     * @return  self
     */ 
    public function setVadsNbProducts(string $vads_nb_products)
    {
        $this->vads_nb_products = $vads_nb_products;

        return $this;
    }

    /**
     * Get value of vads_product_ext_idN.
     *
     * @return  string
     */ 
    public function getProductExtIdN()
    {
        return $this->product_ext_idN;
    }

    /**
     * Set value of vads_product_ext_idN.
     *
     * @param  string  $product_ext_idN  Value of vads_product_ext_idN.
     *
     * @return  self
     */ 
    public function setProductExtIdN(string $product_ext_idN)
    {
        $this->product_ext_idN = $product_ext_idN;

        return $this;
    }

    /**
     * Get value of vads_product_ext_idN.
     *
     * @return  string
     */ 
    public function getProductLabelN()
    {
        return $this->product_labelN;
    }

    /**
     * Set value of vads_product_ext_idN.
     *
     * @param  string  $product_labelN  Value of vads_product_ext_idN.
     *
     * @return  self
     */ 
    public function setProductLabelN(string $product_labelN)
    {
        $this->product_labelN = $product_labelN;

        return $this;
    }

    /**
     * Get value of vads_product_typeN.
     *
     * @return  string
     */ 
    public function getVadsProductTypeN()
    {
        return $this->vads_product_typeN;
    }

    /**
     * Set value of vads_product_typeN.
     *
     * @param  string  $vads_product_typeN  Value of vads_product_typeN.
     *
     * @return  self
     */ 
    public function setVadsProductTypeN(string $vads_product_typeN)
    {
        $this->vads_product_typeN = $vads_product_typeN;

        return $this;
    }

    /**
     * Get value of vads_product_typeN.
     *
     * @return  string
     */ 
    public function getProductRefN()
    {
        return $this->product_refN;
    }

    /**
     * Set value of vads_product_typeN.
     *
     * @param  string  $product_refN  Value of vads_product_typeN.
     *
     * @return  self
     */ 
    public function setProductRefN(string $product_refN)
    {
        $this->product_refN = $product_refN;

        return $this;
    }

    /**
     * Get value of vads_product_qtyN.
     *
     * @return  string
     */ 
    public function getProductQtyN()
    {
        return $this->product_qtyN;
    }

    /**
     * Set value of vads_product_qtyN.
     *
     * @param  string  $product_qtyN  Value of vads_product_qtyN.
     *
     * @return  self
     */ 
    public function setProductQtyN(string $product_qtyN)
    {
        $this->product_qtyN = $product_qtyN;

        return $this;
    }

    /**
     * Get value of vads_threeds_mpi.
     *
     * @return  string
     */ 
    public function getThreedsMpi()
    {
        return $this->threeds_mpi;
    }

    /**
     * Set value of vads_threeds_mpi.
     *
     * @param  string  $threeds_mpi  Value of vads_threeds_mpi.
     *
     * @return  self
     */ 
    public function setThreedsMpi(string $threeds_mpi)
    {
        $this->threeds_mpi = $threeds_mpi;

        return $this;
    }

    /**
     * Get value of vads_url_check.
     *
     * @return  string
     */ 
    public function getUrlCheck()
    {
        return $this->url_check;
    }

    /**
     * Set value of vads_url_check.
     *
     * @param  string  $url_check  Value of vads_url_check.
     *
     * @return  self
     */ 
    public function setUrlCheck(string $url_check)
    {
        $this->url_check = $url_check;

        return $this;
    }

    /**
     * Get value of vads_contracts.
     *
     * @return  string
     */ 
    public function getContracts()
    {
        return $this->contracts;
    }

    /**
     * Set value of vads_contracts.
     *
     * @param  string  $contracts  Value of vads_contracts.
     *
     * @return  self
     */ 
    public function setContracts(string $contracts)
    {
        $this->contracts = $contracts;

        return $this;
    }
}
<?php

namespace Juniper\Webservice;

class PaymentBookingResponse
{

    /**
     * @var JP_PaymentRS $PaymentRS
     */
    protected $PaymentRS = null;

    /**
     * @param JP_PaymentRS $PaymentRS
     */
    public function __construct($PaymentRS)
    {
      $this->PaymentRS = $PaymentRS;
    }

    /**
     * @return JP_PaymentRS
     */
    public function getPaymentRS()
    {
      return $this->PaymentRS;
    }

    /**
     * @param JP_PaymentRS $PaymentRS
     * @return PaymentBookingResponse
     */
    public function setPaymentRS($PaymentRS)
    {
      $this->PaymentRS = $PaymentRS;
      return $this;
    }

}

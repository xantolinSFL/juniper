<?php

class PaymentBooking
{

    /**
     * @var JP_PaymentRQ $PaymentRQ
     */
    protected $PaymentRQ = null;

    /**
     * @param JP_PaymentRQ $PaymentRQ
     */
    public function __construct($PaymentRQ)
    {
      $this->PaymentRQ = $PaymentRQ;
    }

    /**
     * @return JP_PaymentRQ
     */
    public function getPaymentRQ()
    {
      return $this->PaymentRQ;
    }

    /**
     * @param JP_PaymentRQ $PaymentRQ
     * @return PaymentBooking
     */
    public function setPaymentRQ($PaymentRQ)
    {
      $this->PaymentRQ = $PaymentRQ;
      return $this;
    }

}

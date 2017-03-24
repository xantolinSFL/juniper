<?php

class CheckPayment
{

    /**
     * @var JP_CheckPaymentRQ $CheckPaymentRQ
     */
    protected $CheckPaymentRQ = null;

    /**
     * @param JP_CheckPaymentRQ $CheckPaymentRQ
     */
    public function __construct($CheckPaymentRQ)
    {
      $this->CheckPaymentRQ = $CheckPaymentRQ;
    }

    /**
     * @return JP_CheckPaymentRQ
     */
    public function getCheckPaymentRQ()
    {
      return $this->CheckPaymentRQ;
    }

    /**
     * @param JP_CheckPaymentRQ $CheckPaymentRQ
     * @return CheckPayment
     */
    public function setCheckPaymentRQ($CheckPaymentRQ)
    {
      $this->CheckPaymentRQ = $CheckPaymentRQ;
      return $this;
    }

}

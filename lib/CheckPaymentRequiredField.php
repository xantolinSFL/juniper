<?php

class CheckPaymentRequiredField
{

    /**
     * @var JP_CheckPaymentRequiredFieldsRQ $CheckPaymentRequiredFieldsRQ
     */
    protected $CheckPaymentRequiredFieldsRQ = null;

    /**
     * @param JP_CheckPaymentRequiredFieldsRQ $CheckPaymentRequiredFieldsRQ
     */
    public function __construct($CheckPaymentRequiredFieldsRQ)
    {
      $this->CheckPaymentRequiredFieldsRQ = $CheckPaymentRequiredFieldsRQ;
    }

    /**
     * @return JP_CheckPaymentRequiredFieldsRQ
     */
    public function getCheckPaymentRequiredFieldsRQ()
    {
      return $this->CheckPaymentRequiredFieldsRQ;
    }

    /**
     * @param JP_CheckPaymentRequiredFieldsRQ $CheckPaymentRequiredFieldsRQ
     * @return CheckPaymentRequiredField
     */
    public function setCheckPaymentRequiredFieldsRQ($CheckPaymentRequiredFieldsRQ)
    {
      $this->CheckPaymentRequiredFieldsRQ = $CheckPaymentRequiredFieldsRQ;
      return $this;
    }

}

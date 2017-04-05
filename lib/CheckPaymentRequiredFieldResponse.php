<?php

namespace Juniper\Webservice;

class CheckPaymentRequiredFieldResponse
{

    /**
     * @var JP_CheckPaymentRequiredFieldsRS $CheckPaymentRequiredFieldsRS
     */
    protected $CheckPaymentRequiredFieldsRS = null;

    /**
     * @param JP_CheckPaymentRequiredFieldsRS $CheckPaymentRequiredFieldsRS
     */
    public function __construct($CheckPaymentRequiredFieldsRS)
    {
      $this->CheckPaymentRequiredFieldsRS = $CheckPaymentRequiredFieldsRS;
    }

    /**
     * @return JP_CheckPaymentRequiredFieldsRS
     */
    public function getCheckPaymentRequiredFieldsRS()
    {
      return $this->CheckPaymentRequiredFieldsRS;
    }

    /**
     * @param JP_CheckPaymentRequiredFieldsRS $CheckPaymentRequiredFieldsRS
     * @return CheckPaymentRequiredFieldResponse
     */
    public function setCheckPaymentRequiredFieldsRS($CheckPaymentRequiredFieldsRS)
    {
      $this->CheckPaymentRequiredFieldsRS = $CheckPaymentRequiredFieldsRS;
      return $this;
    }

}

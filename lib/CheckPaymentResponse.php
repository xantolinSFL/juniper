<?php

namespace Juniper\Webservice;

class CheckPaymentResponse
{

    /**
     * @var JP_CheckPaymentRS $CheckPaymentRS
     */
    protected $CheckPaymentRS = null;

    /**
     * @param JP_CheckPaymentRS $CheckPaymentRS
     */
    public function __construct($CheckPaymentRS)
    {
      $this->CheckPaymentRS = $CheckPaymentRS;
    }

    /**
     * @return JP_CheckPaymentRS
     */
    public function getCheckPaymentRS()
    {
      return $this->CheckPaymentRS;
    }

    /**
     * @param JP_CheckPaymentRS $CheckPaymentRS
     * @return CheckPaymentResponse
     */
    public function setCheckPaymentRS($CheckPaymentRS)
    {
      $this->CheckPaymentRS = $CheckPaymentRS;
      return $this;
    }

}

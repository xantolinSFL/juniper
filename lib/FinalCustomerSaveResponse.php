<?php

namespace Juniper\Webservice;

class FinalCustomerSaveResponse
{

    /**
     * @var JP_FinalCustomerSaveResult $FinalCustomerSaveRS
     */
    protected $FinalCustomerSaveRS = null;

    /**
     * @param JP_FinalCustomerSaveResult $FinalCustomerSaveRS
     */
    public function __construct($FinalCustomerSaveRS)
    {
      $this->FinalCustomerSaveRS = $FinalCustomerSaveRS;
    }

    /**
     * @return JP_FinalCustomerSaveResult
     */
    public function getFinalCustomerSaveRS()
    {
      return $this->FinalCustomerSaveRS;
    }

    /**
     * @param JP_FinalCustomerSaveResult $FinalCustomerSaveRS
     * @return FinalCustomerSaveResponse
     */
    public function setFinalCustomerSaveRS($FinalCustomerSaveRS)
    {
      $this->FinalCustomerSaveRS = $FinalCustomerSaveRS;
      return $this;
    }

}

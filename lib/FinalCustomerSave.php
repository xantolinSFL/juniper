<?php

namespace Juniper\Webservice;

class FinalCustomerSave
{

    /**
     * @var JP_FinalCustomerSave $FinalCustomerSaveRQ
     */
    protected $FinalCustomerSaveRQ = null;

    /**
     * @param JP_FinalCustomerSave $FinalCustomerSaveRQ
     */
    public function __construct($FinalCustomerSaveRQ)
    {
      $this->FinalCustomerSaveRQ = $FinalCustomerSaveRQ;
    }

    /**
     * @return JP_FinalCustomerSave
     */
    public function getFinalCustomerSaveRQ()
    {
      return $this->FinalCustomerSaveRQ;
    }

    /**
     * @param JP_FinalCustomerSave $FinalCustomerSaveRQ
     * @return FinalCustomerSave
     */
    public function setFinalCustomerSaveRQ($FinalCustomerSaveRQ)
    {
      $this->FinalCustomerSaveRQ = $FinalCustomerSaveRQ;
      return $this;
    }

}

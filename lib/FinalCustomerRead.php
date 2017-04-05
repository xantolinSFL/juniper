<?php

namespace Juniper\Webservice;

class FinalCustomerRead
{

    /**
     * @var JP_FinalCustomerRead $FinalCustomerReadRQ
     */
    protected $FinalCustomerReadRQ = null;

    /**
     * @param JP_FinalCustomerRead $FinalCustomerReadRQ
     */
    public function __construct($FinalCustomerReadRQ)
    {
      $this->FinalCustomerReadRQ = $FinalCustomerReadRQ;
    }

    /**
     * @return JP_FinalCustomerRead
     */
    public function getFinalCustomerReadRQ()
    {
      return $this->FinalCustomerReadRQ;
    }

    /**
     * @param JP_FinalCustomerRead $FinalCustomerReadRQ
     * @return FinalCustomerRead
     */
    public function setFinalCustomerReadRQ($FinalCustomerReadRQ)
    {
      $this->FinalCustomerReadRQ = $FinalCustomerReadRQ;
      return $this;
    }

}

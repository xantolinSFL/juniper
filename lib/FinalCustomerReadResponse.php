<?php

class FinalCustomerReadResponse
{

    /**
     * @var JP_StaticDataRS $FinalCustomerReadRS
     */
    protected $FinalCustomerReadRS = null;

    /**
     * @param JP_StaticDataRS $FinalCustomerReadRS
     */
    public function __construct($FinalCustomerReadRS)
    {
      $this->FinalCustomerReadRS = $FinalCustomerReadRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getFinalCustomerReadRS()
    {
      return $this->FinalCustomerReadRS;
    }

    /**
     * @param JP_StaticDataRS $FinalCustomerReadRS
     * @return FinalCustomerReadResponse
     */
    public function setFinalCustomerReadRS($FinalCustomerReadRS)
    {
      $this->FinalCustomerReadRS = $FinalCustomerReadRS;
      return $this;
    }

}

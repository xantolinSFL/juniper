<?php

class JP_InsuranceCheckAvailRequest
{

    /**
     * @var JP_InsuranceOptionRequest $Insurance
     */
    protected $Insurance = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_InsuranceOptionRequest
     */
    public function getInsurance()
    {
      return $this->Insurance;
    }

    /**
     * @param JP_InsuranceOptionRequest $Insurance
     * @return JP_InsuranceCheckAvailRequest
     */
    public function setInsurance($Insurance)
    {
      $this->Insurance = $Insurance;
      return $this;
    }

}

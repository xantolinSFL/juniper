<?php

class InsuranceCheckAvail
{

    /**
     * @var JP_InsuranceCheckAvail $InsuranceCheckAvailRQ
     */
    protected $InsuranceCheckAvailRQ = null;

    /**
     * @param JP_InsuranceCheckAvail $InsuranceCheckAvailRQ
     */
    public function __construct($InsuranceCheckAvailRQ)
    {
      $this->InsuranceCheckAvailRQ = $InsuranceCheckAvailRQ;
    }

    /**
     * @return JP_InsuranceCheckAvail
     */
    public function getInsuranceCheckAvailRQ()
    {
      return $this->InsuranceCheckAvailRQ;
    }

    /**
     * @param JP_InsuranceCheckAvail $InsuranceCheckAvailRQ
     * @return InsuranceCheckAvail
     */
    public function setInsuranceCheckAvailRQ($InsuranceCheckAvailRQ)
    {
      $this->InsuranceCheckAvailRQ = $InsuranceCheckAvailRQ;
      return $this;
    }

}

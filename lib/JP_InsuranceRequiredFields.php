<?php

class JP_InsuranceRequiredFields
{

    /**
     * @var JP_InsuranceBooking $InsuranceBooking
     */
    protected $InsuranceBooking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_InsuranceBooking
     */
    public function getInsuranceBooking()
    {
      return $this->InsuranceBooking;
    }

    /**
     * @param JP_InsuranceBooking $InsuranceBooking
     * @return JP_InsuranceRequiredFields
     */
    public function setInsuranceBooking($InsuranceBooking)
    {
      $this->InsuranceBooking = $InsuranceBooking;
      return $this;
    }

}

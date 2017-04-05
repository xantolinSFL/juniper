<?php

namespace Juniper\Webservice;

class InsuranceBooking
{

    /**
     * @var JP_InsuranceBooking $InsuranceBookingRQ
     */
    protected $InsuranceBookingRQ = null;

    /**
     * @param JP_InsuranceBooking $InsuranceBookingRQ
     */
    public function __construct($InsuranceBookingRQ)
    {
      $this->InsuranceBookingRQ = $InsuranceBookingRQ;
    }

    /**
     * @return JP_InsuranceBooking
     */
    public function getInsuranceBookingRQ()
    {
      return $this->InsuranceBookingRQ;
    }

    /**
     * @param JP_InsuranceBooking $InsuranceBookingRQ
     * @return InsuranceBooking
     */
    public function setInsuranceBookingRQ($InsuranceBookingRQ)
    {
      $this->InsuranceBookingRQ = $InsuranceBookingRQ;
      return $this;
    }

}

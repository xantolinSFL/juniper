<?php

namespace Juniper\Webservice;

class InsuranceBookingRules
{

    /**
     * @var JP_InsuranceBookingRulesRQ $InsuranceBookingRulesRQ
     */
    protected $InsuranceBookingRulesRQ = null;

    /**
     * @param JP_InsuranceBookingRulesRQ $InsuranceBookingRulesRQ
     */
    public function __construct($InsuranceBookingRulesRQ)
    {
      $this->InsuranceBookingRulesRQ = $InsuranceBookingRulesRQ;
    }

    /**
     * @return JP_InsuranceBookingRulesRQ
     */
    public function getInsuranceBookingRulesRQ()
    {
      return $this->InsuranceBookingRulesRQ;
    }

    /**
     * @param JP_InsuranceBookingRulesRQ $InsuranceBookingRulesRQ
     * @return InsuranceBookingRules
     */
    public function setInsuranceBookingRulesRQ($InsuranceBookingRulesRQ)
    {
      $this->InsuranceBookingRulesRQ = $InsuranceBookingRulesRQ;
      return $this;
    }

}

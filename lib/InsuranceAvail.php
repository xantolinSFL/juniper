<?php

namespace Juniper\Webservice;

class InsuranceAvail
{

    /**
     * @var JP_InsuranceAvail $InsuranceAvailRQ
     */
    protected $InsuranceAvailRQ = null;

    /**
     * @param JP_InsuranceAvail $InsuranceAvailRQ
     */
    public function __construct($InsuranceAvailRQ)
    {
      $this->InsuranceAvailRQ = $InsuranceAvailRQ;
    }

    /**
     * @return JP_InsuranceAvail
     */
    public function getInsuranceAvailRQ()
    {
      return $this->InsuranceAvailRQ;
    }

    /**
     * @param JP_InsuranceAvail $InsuranceAvailRQ
     * @return InsuranceAvail
     */
    public function setInsuranceAvailRQ($InsuranceAvailRQ)
    {
      $this->InsuranceAvailRQ = $InsuranceAvailRQ;
      return $this;
    }

}

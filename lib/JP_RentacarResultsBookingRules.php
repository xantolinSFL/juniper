<?php

namespace Juniper\Webservice;

class JP_RentacarResultsBookingRules
{

    /**
     * @var JP_RentacarRulesResult[] $RentacarResultsBookingRules
     */
    protected $RentacarResultsBookingRules = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RentacarRulesResult[]
     */
    public function getRentacarResultsBookingRules()
    {
      return $this->RentacarResultsBookingRules;
    }

    /**
     * @param JP_RentacarRulesResult[] $RentacarResultsBookingRules
     * @return JP_RentacarResultsBookingRules
     */
    public function setRentacarResultsBookingRules(array $RentacarResultsBookingRules = null)
    {
      $this->RentacarResultsBookingRules = $RentacarResultsBookingRules;
      return $this;
    }

}

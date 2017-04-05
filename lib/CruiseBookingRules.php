<?php

namespace Juniper\Webservice;

class CruiseBookingRules
{

    /**
     * @var JP_CruiseBookingRulesRQ $CruiseBookingRulesRQ
     */
    protected $CruiseBookingRulesRQ = null;

    /**
     * @param JP_CruiseBookingRulesRQ $CruiseBookingRulesRQ
     */
    public function __construct($CruiseBookingRulesRQ)
    {
      $this->CruiseBookingRulesRQ = $CruiseBookingRulesRQ;
    }

    /**
     * @return JP_CruiseBookingRulesRQ
     */
    public function getCruiseBookingRulesRQ()
    {
      return $this->CruiseBookingRulesRQ;
    }

    /**
     * @param JP_CruiseBookingRulesRQ $CruiseBookingRulesRQ
     * @return CruiseBookingRules
     */
    public function setCruiseBookingRulesRQ($CruiseBookingRulesRQ)
    {
      $this->CruiseBookingRulesRQ = $CruiseBookingRulesRQ;
      return $this;
    }

}

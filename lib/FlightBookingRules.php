<?php

class FlightBookingRules
{

    /**
     * @var JP_FlightBookingRulesRQ $FlightBookingRulesRQ
     */
    protected $FlightBookingRulesRQ = null;

    /**
     * @param JP_FlightBookingRulesRQ $FlightBookingRulesRQ
     */
    public function __construct($FlightBookingRulesRQ)
    {
      $this->FlightBookingRulesRQ = $FlightBookingRulesRQ;
    }

    /**
     * @return JP_FlightBookingRulesRQ
     */
    public function getFlightBookingRulesRQ()
    {
      return $this->FlightBookingRulesRQ;
    }

    /**
     * @param JP_FlightBookingRulesRQ $FlightBookingRulesRQ
     * @return FlightBookingRules
     */
    public function setFlightBookingRulesRQ($FlightBookingRulesRQ)
    {
      $this->FlightBookingRulesRQ = $FlightBookingRulesRQ;
      return $this;
    }

}

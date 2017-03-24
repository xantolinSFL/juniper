<?php

class FlightCheckAvail
{

    /**
     * @var JP_FlightCheckAvailRQ $FlightCheckAvailRQ
     */
    protected $FlightCheckAvailRQ = null;

    /**
     * @param JP_FlightCheckAvailRQ $FlightCheckAvailRQ
     */
    public function __construct($FlightCheckAvailRQ)
    {
      $this->FlightCheckAvailRQ = $FlightCheckAvailRQ;
    }

    /**
     * @return JP_FlightCheckAvailRQ
     */
    public function getFlightCheckAvailRQ()
    {
      return $this->FlightCheckAvailRQ;
    }

    /**
     * @param JP_FlightCheckAvailRQ $FlightCheckAvailRQ
     * @return FlightCheckAvail
     */
    public function setFlightCheckAvailRQ($FlightCheckAvailRQ)
    {
      $this->FlightCheckAvailRQ = $FlightCheckAvailRQ;
      return $this;
    }

}

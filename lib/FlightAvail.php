<?php

class FlightAvail
{

    /**
     * @var JP_FlightAvail $FlightAvailRQ
     */
    protected $FlightAvailRQ = null;

    /**
     * @param JP_FlightAvail $FlightAvailRQ
     */
    public function __construct($FlightAvailRQ)
    {
      $this->FlightAvailRQ = $FlightAvailRQ;
    }

    /**
     * @return JP_FlightAvail
     */
    public function getFlightAvailRQ()
    {
      return $this->FlightAvailRQ;
    }

    /**
     * @param JP_FlightAvail $FlightAvailRQ
     * @return FlightAvail
     */
    public function setFlightAvailRQ($FlightAvailRQ)
    {
      $this->FlightAvailRQ = $FlightAvailRQ;
      return $this;
    }

}

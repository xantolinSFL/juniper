<?php

namespace Juniper\Webservice;

class FlightBooking
{

    /**
     * @var JP_FlightBooking $FlightBookingRQ
     */
    protected $FlightBookingRQ = null;

    /**
     * @param JP_FlightBooking $FlightBookingRQ
     */
    public function __construct($FlightBookingRQ)
    {
      $this->FlightBookingRQ = $FlightBookingRQ;
    }

    /**
     * @return JP_FlightBooking
     */
    public function getFlightBookingRQ()
    {
      return $this->FlightBookingRQ;
    }

    /**
     * @param JP_FlightBooking $FlightBookingRQ
     * @return FlightBooking
     */
    public function setFlightBookingRQ($FlightBookingRQ)
    {
      $this->FlightBookingRQ = $FlightBookingRQ;
      return $this;
    }

}

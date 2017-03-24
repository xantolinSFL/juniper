<?php

class JP_FlightRequiredFields
{

    /**
     * @var JP_FlightBooking $FlightBooking
     */
    protected $FlightBooking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_FlightBooking
     */
    public function getFlightBooking()
    {
      return $this->FlightBooking;
    }

    /**
     * @param JP_FlightBooking $FlightBooking
     * @return JP_FlightRequiredFields
     */
    public function setFlightBooking($FlightBooking)
    {
      $this->FlightBooking = $FlightBooking;
      return $this;
    }

}

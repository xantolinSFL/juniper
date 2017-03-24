<?php

class CruiseBooking
{

    /**
     * @var JP_CruiseBooking $CruiseBookingRQ
     */
    protected $CruiseBookingRQ = null;

    /**
     * @param JP_CruiseBooking $CruiseBookingRQ
     */
    public function __construct($CruiseBookingRQ)
    {
      $this->CruiseBookingRQ = $CruiseBookingRQ;
    }

    /**
     * @return JP_CruiseBooking
     */
    public function getCruiseBookingRQ()
    {
      return $this->CruiseBookingRQ;
    }

    /**
     * @param JP_CruiseBooking $CruiseBookingRQ
     * @return CruiseBooking
     */
    public function setCruiseBookingRQ($CruiseBookingRQ)
    {
      $this->CruiseBookingRQ = $CruiseBookingRQ;
      return $this;
    }

}

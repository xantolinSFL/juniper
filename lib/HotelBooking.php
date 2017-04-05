<?php

namespace Juniper\Webservice;

class HotelBooking
{

    /**
     * @var JP_HotelBooking $HotelBookingRQ
     */
    protected $HotelBookingRQ = null;

    /**
     * @param JP_HotelBooking $HotelBookingRQ
     */
    public function __construct($HotelBookingRQ)
    {
      $this->HotelBookingRQ = $HotelBookingRQ;
    }

    /**
     * @return JP_HotelBooking
     */
    public function getHotelBookingRQ()
    {
      return $this->HotelBookingRQ;
    }

    /**
     * @param JP_HotelBooking $HotelBookingRQ
     * @return HotelBooking
     */
    public function setHotelBookingRQ($HotelBookingRQ)
    {
      $this->HotelBookingRQ = $HotelBookingRQ;
      return $this;
    }

}

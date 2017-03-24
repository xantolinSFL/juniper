<?php

class HotelCheckAvail
{

    /**
     * @var JP_HotelCheckAvail $HotelCheckAvailRQ
     */
    protected $HotelCheckAvailRQ = null;

    /**
     * @param JP_HotelCheckAvail $HotelCheckAvailRQ
     */
    public function __construct($HotelCheckAvailRQ)
    {
      $this->HotelCheckAvailRQ = $HotelCheckAvailRQ;
    }

    /**
     * @return JP_HotelCheckAvail
     */
    public function getHotelCheckAvailRQ()
    {
      return $this->HotelCheckAvailRQ;
    }

    /**
     * @param JP_HotelCheckAvail $HotelCheckAvailRQ
     * @return HotelCheckAvail
     */
    public function setHotelCheckAvailRQ($HotelCheckAvailRQ)
    {
      $this->HotelCheckAvailRQ = $HotelCheckAvailRQ;
      return $this;
    }

}

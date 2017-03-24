<?php

class HotelAvail
{

    /**
     * @var JP_HotelAvail $HotelAvailRQ
     */
    protected $HotelAvailRQ = null;

    /**
     * @param JP_HotelAvail $HotelAvailRQ
     */
    public function __construct($HotelAvailRQ)
    {
      $this->HotelAvailRQ = $HotelAvailRQ;
    }

    /**
     * @return JP_HotelAvail
     */
    public function getHotelAvailRQ()
    {
      return $this->HotelAvailRQ;
    }

    /**
     * @param JP_HotelAvail $HotelAvailRQ
     * @return HotelAvail
     */
    public function setHotelAvailRQ($HotelAvailRQ)
    {
      $this->HotelAvailRQ = $HotelAvailRQ;
      return $this;
    }

}

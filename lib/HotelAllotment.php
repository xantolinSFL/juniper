<?php

class HotelAllotment
{

    /**
     * @var JP_HotelAllotmentRQ $HotelAllotmentRQ
     */
    protected $HotelAllotmentRQ = null;

    /**
     * @param JP_HotelAllotmentRQ $HotelAllotmentRQ
     */
    public function __construct($HotelAllotmentRQ)
    {
      $this->HotelAllotmentRQ = $HotelAllotmentRQ;
    }

    /**
     * @return JP_HotelAllotmentRQ
     */
    public function getHotelAllotmentRQ()
    {
      return $this->HotelAllotmentRQ;
    }

    /**
     * @param JP_HotelAllotmentRQ $HotelAllotmentRQ
     * @return HotelAllotment
     */
    public function setHotelAllotmentRQ($HotelAllotmentRQ)
    {
      $this->HotelAllotmentRQ = $HotelAllotmentRQ;
      return $this;
    }

}

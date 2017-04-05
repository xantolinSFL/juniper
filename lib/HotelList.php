<?php

namespace Juniper\Webservice;

class HotelList
{

    /**
     * @var JP_HotelListRQ $HotelListRQ
     */
    protected $HotelListRQ = null;

    /**
     * @param JP_HotelListRQ $HotelListRQ
     */
    public function __construct($HotelListRQ)
    {
      $this->HotelListRQ = $HotelListRQ;
    }

    /**
     * @return JP_HotelListRQ
     */
    public function getHotelListRQ()
    {
      return $this->HotelListRQ;
    }

    /**
     * @param JP_HotelListRQ $HotelListRQ
     * @return HotelList
     */
    public function setHotelListRQ($HotelListRQ)
    {
      $this->HotelListRQ = $HotelListRQ;
      return $this;
    }

}

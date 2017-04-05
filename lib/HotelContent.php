<?php

namespace Juniper\Webservice;

class HotelContent
{

    /**
     * @var JP_HotelContentRQ $HotelContentRQ
     */
    protected $HotelContentRQ = null;

    /**
     * @param JP_HotelContentRQ $HotelContentRQ
     */
    public function __construct($HotelContentRQ)
    {
      $this->HotelContentRQ = $HotelContentRQ;
    }

    /**
     * @return JP_HotelContentRQ
     */
    public function getHotelContentRQ()
    {
      return $this->HotelContentRQ;
    }

    /**
     * @param JP_HotelContentRQ $HotelContentRQ
     * @return HotelContent
     */
    public function setHotelContentRQ($HotelContentRQ)
    {
      $this->HotelContentRQ = $HotelContentRQ;
      return $this;
    }

}

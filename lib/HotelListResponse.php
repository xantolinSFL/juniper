<?php

namespace Juniper\Webservice;

class HotelListResponse
{

    /**
     * @var JP_StaticDataRS $HotelListRS
     */
    protected $HotelListRS = null;

    /**
     * @param JP_StaticDataRS $HotelListRS
     */
    public function __construct($HotelListRS)
    {
      $this->HotelListRS = $HotelListRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getHotelListRS()
    {
      return $this->HotelListRS;
    }

    /**
     * @param JP_StaticDataRS $HotelListRS
     * @return HotelListResponse
     */
    public function setHotelListRS($HotelListRS)
    {
      $this->HotelListRS = $HotelListRS;
      return $this;
    }

}

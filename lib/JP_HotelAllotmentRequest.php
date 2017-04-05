<?php

namespace Juniper\Webservice;

class JP_HotelAllotmentRequest
{

    /**
     * @var ArrayOfJP_HotelInventoryCode $HotelCodes
     */
    protected $HotelCodes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_HotelInventoryCode
     */
    public function getHotelCodes()
    {
      return $this->HotelCodes;
    }

    /**
     * @param ArrayOfJP_HotelInventoryCode $HotelCodes
     * @return JP_HotelAllotmentRequest
     */
    public function setHotelCodes($HotelCodes)
    {
      $this->HotelCodes = $HotelCodes;
      return $this;
    }

}

<?php

class JP_HotelSpecificationsRequest
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
     * @return JP_HotelSpecificationsRequest
     */
    public function setHotelCodes($HotelCodes)
    {
      $this->HotelCodes = $HotelCodes;
      return $this;
    }

}

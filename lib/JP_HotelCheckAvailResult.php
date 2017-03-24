<?php

class JP_HotelCheckAvailResult
{

    /**
     * @var ArrayOfJP_HotelOptionCheckAvail $HotelOptions
     */
    protected $HotelOptions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_HotelOptionCheckAvail
     */
    public function getHotelOptions()
    {
      return $this->HotelOptions;
    }

    /**
     * @param ArrayOfJP_HotelOptionCheckAvail $HotelOptions
     * @return JP_HotelCheckAvailResult
     */
    public function setHotelOptions($HotelOptions)
    {
      $this->HotelOptions = $HotelOptions;
      return $this;
    }

}

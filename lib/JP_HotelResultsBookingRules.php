<?php

namespace Juniper\Webservice;

class JP_HotelResultsBookingRules
{

    /**
     * @var ArrayOfJP_HotelOptionBookingRules $HotelOptions
     */
    protected $HotelOptions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_HotelOptionBookingRules
     */
    public function getHotelOptions()
    {
      return $this->HotelOptions;
    }

    /**
     * @param ArrayOfJP_HotelOptionBookingRules $HotelOptions
     * @return JP_HotelResultsBookingRules
     */
    public function setHotelOptions($HotelOptions)
    {
      $this->HotelOptions = $HotelOptions;
      return $this;
    }

}

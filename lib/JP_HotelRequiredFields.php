<?php

class JP_HotelRequiredFields
{

    /**
     * @var JP_HotelBooking $HotelBooking
     */
    protected $HotelBooking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelBooking
     */
    public function getHotelBooking()
    {
      return $this->HotelBooking;
    }

    /**
     * @param JP_HotelBooking $HotelBooking
     * @return JP_HotelRequiredFields
     */
    public function setHotelBooking($HotelBooking)
    {
      $this->HotelBooking = $HotelBooking;
      return $this;
    }

}

<?php

class JP_HotelTimeInformation
{

    /**
     * @var JP_HotelCheckTime $CheckTime
     */
    protected $CheckTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelCheckTime
     */
    public function getCheckTime()
    {
      return $this->CheckTime;
    }

    /**
     * @param JP_HotelCheckTime $CheckTime
     * @return JP_HotelTimeInformation
     */
    public function setCheckTime($CheckTime)
    {
      $this->CheckTime = $CheckTime;
      return $this;
    }

}

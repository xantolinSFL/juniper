<?php

class JP_HotelElement extends JP_BaseElement
{

    /**
     * @var JP_HotelBookingInfo $HotelBookingInfo
     */
    protected $HotelBookingInfo = null;

    /**
     * @param string $ElementId
     */
    public function __construct($ElementId)
    {
      parent::__construct($ElementId);
    }

    /**
     * @return JP_HotelBookingInfo
     */
    public function getHotelBookingInfo()
    {
      return $this->HotelBookingInfo;
    }

    /**
     * @param JP_HotelBookingInfo $HotelBookingInfo
     * @return JP_HotelElement
     */
    public function setHotelBookingInfo($HotelBookingInfo)
    {
      $this->HotelBookingInfo = $HotelBookingInfo;
      return $this;
    }

}

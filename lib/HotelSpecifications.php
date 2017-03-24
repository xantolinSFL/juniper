<?php

class HotelSpecifications
{

    /**
     * @var JP_HotelSpecificationsRQ $HotelSpecificationsRQ
     */
    protected $HotelSpecificationsRQ = null;

    /**
     * @param JP_HotelSpecificationsRQ $HotelSpecificationsRQ
     */
    public function __construct($HotelSpecificationsRQ)
    {
      $this->HotelSpecificationsRQ = $HotelSpecificationsRQ;
    }

    /**
     * @return JP_HotelSpecificationsRQ
     */
    public function getHotelSpecificationsRQ()
    {
      return $this->HotelSpecificationsRQ;
    }

    /**
     * @param JP_HotelSpecificationsRQ $HotelSpecificationsRQ
     * @return HotelSpecifications
     */
    public function setHotelSpecificationsRQ($HotelSpecificationsRQ)
    {
      $this->HotelSpecificationsRQ = $HotelSpecificationsRQ;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JP_FlightBookingInfo
{

    /**
     * @var JP_BookingPrice $Price
     */
    protected $Price = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_BookingPrice
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param JP_BookingPrice $Price
     * @return JP_FlightBookingInfo
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return JP_AvailStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param JP_AvailStatus $Status
     * @return JP_FlightBookingInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class Reservation
{

    /**
     * @var date $BookingDate
     */
    protected $BookingDate = null;

    /**
     * @var string $Locator
     */
    protected $Locator = null;

    /**
     * @var JP_ResStatus $Status
     */
    protected $Status = null;

    /**
     * @param date $BookingDate
     * @param string $Locator
     * @param JP_ResStatus $Status
     */
    public function __construct($BookingDate, $Locator, $Status)
    {
      $this->BookingDate = $BookingDate;
      $this->Locator = $Locator;
      $this->Status = $Status;
    }

    /**
     * @return date
     */
    public function getBookingDate()
    {
      return $this->BookingDate;
    }

    /**
     * @param date $BookingDate
     * @return Reservation
     */
    public function setBookingDate($BookingDate)
    {
      $this->BookingDate = $BookingDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocator()
    {
      return $this->Locator;
    }

    /**
     * @param string $Locator
     * @return Reservation
     */
    public function setLocator($Locator)
    {
      $this->Locator = $Locator;
      return $this;
    }

    /**
     * @return JP_ResStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param JP_ResStatus $Status
     * @return Reservation
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}

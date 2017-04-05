<?php

namespace Juniper\Webservice;

class JP_BookingListRequest
{

    /**
     * @var StartingBookingDate $StartingBookingDate
     */
    protected $StartingBookingDate = null;

    /**
     * @var BookingDate $BookingDate
     */
    protected $BookingDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StartingBookingDate
     */
    public function getStartingBookingDate()
    {
      return $this->StartingBookingDate;
    }

    /**
     * @param StartingBookingDate $StartingBookingDate
     * @return JP_BookingListRequest
     */
    public function setStartingBookingDate($StartingBookingDate)
    {
      $this->StartingBookingDate = $StartingBookingDate;
      return $this;
    }

    /**
     * @return BookingDate
     */
    public function getBookingDate()
    {
      return $this->BookingDate;
    }

    /**
     * @param BookingDate $BookingDate
     * @return JP_BookingListRequest
     */
    public function setBookingDate($BookingDate)
    {
      $this->BookingDate = $BookingDate;
      return $this;
    }

}

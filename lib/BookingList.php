<?php

namespace Juniper\Webservice;

class BookingList
{

    /**
     * @var JP_BookingListRQ $BookingListRQ
     */
    protected $BookingListRQ = null;

    /**
     * @param JP_BookingListRQ $BookingListRQ
     */
    public function __construct($BookingListRQ)
    {
      $this->BookingListRQ = $BookingListRQ;
    }

    /**
     * @return JP_BookingListRQ
     */
    public function getBookingListRQ()
    {
      return $this->BookingListRQ;
    }

    /**
     * @param JP_BookingListRQ $BookingListRQ
     * @return BookingList
     */
    public function setBookingListRQ($BookingListRQ)
    {
      $this->BookingListRQ = $BookingListRQ;
      return $this;
    }

}

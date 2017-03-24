<?php

class BookingListResponse
{

    /**
     * @var JP_BookingListRS $BookingListRS
     */
    protected $BookingListRS = null;

    /**
     * @param JP_BookingListRS $BookingListRS
     */
    public function __construct($BookingListRS)
    {
      $this->BookingListRS = $BookingListRS;
    }

    /**
     * @return JP_BookingListRS
     */
    public function getBookingListRS()
    {
      return $this->BookingListRS;
    }

    /**
     * @param JP_BookingListRS $BookingListRS
     * @return BookingListResponse
     */
    public function setBookingListRS($BookingListRS)
    {
      $this->BookingListRS = $BookingListRS;
      return $this;
    }

}

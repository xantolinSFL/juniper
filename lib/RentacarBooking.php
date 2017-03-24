<?php

class RentacarBooking
{

    /**
     * @var JP_RentacarBooking $RentacarBookingRQ
     */
    protected $RentacarBookingRQ = null;

    /**
     * @param JP_RentacarBooking $RentacarBookingRQ
     */
    public function __construct($RentacarBookingRQ)
    {
      $this->RentacarBookingRQ = $RentacarBookingRQ;
    }

    /**
     * @return JP_RentacarBooking
     */
    public function getRentacarBookingRQ()
    {
      return $this->RentacarBookingRQ;
    }

    /**
     * @param JP_RentacarBooking $RentacarBookingRQ
     * @return RentacarBooking
     */
    public function setRentacarBookingRQ($RentacarBookingRQ)
    {
      $this->RentacarBookingRQ = $RentacarBookingRQ;
      return $this;
    }

}

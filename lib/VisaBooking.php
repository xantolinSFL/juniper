<?php

class VisaBooking
{

    /**
     * @var JP_VisaBooking $VisaBookingRQ
     */
    protected $VisaBookingRQ = null;

    /**
     * @param JP_VisaBooking $VisaBookingRQ
     */
    public function __construct($VisaBookingRQ)
    {
      $this->VisaBookingRQ = $VisaBookingRQ;
    }

    /**
     * @return JP_VisaBooking
     */
    public function getVisaBookingRQ()
    {
      return $this->VisaBookingRQ;
    }

    /**
     * @param JP_VisaBooking $VisaBookingRQ
     * @return VisaBooking
     */
    public function setVisaBookingRQ($VisaBookingRQ)
    {
      $this->VisaBookingRQ = $VisaBookingRQ;
      return $this;
    }

}

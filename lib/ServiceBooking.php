<?php

class ServiceBooking
{

    /**
     * @var JP_ServiceBooking $ServiceBookingRQ
     */
    protected $ServiceBookingRQ = null;

    /**
     * @param JP_ServiceBooking $ServiceBookingRQ
     */
    public function __construct($ServiceBookingRQ)
    {
      $this->ServiceBookingRQ = $ServiceBookingRQ;
    }

    /**
     * @return JP_ServiceBooking
     */
    public function getServiceBookingRQ()
    {
      return $this->ServiceBookingRQ;
    }

    /**
     * @param JP_ServiceBooking $ServiceBookingRQ
     * @return ServiceBooking
     */
    public function setServiceBookingRQ($ServiceBookingRQ)
    {
      $this->ServiceBookingRQ = $ServiceBookingRQ;
      return $this;
    }

}

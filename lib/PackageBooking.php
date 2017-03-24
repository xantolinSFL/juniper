<?php

class PackageBooking
{

    /**
     * @var JP_PackageBooking $PackageBookingRQ
     */
    protected $PackageBookingRQ = null;

    /**
     * @param JP_PackageBooking $PackageBookingRQ
     */
    public function __construct($PackageBookingRQ)
    {
      $this->PackageBookingRQ = $PackageBookingRQ;
    }

    /**
     * @return JP_PackageBooking
     */
    public function getPackageBookingRQ()
    {
      return $this->PackageBookingRQ;
    }

    /**
     * @param JP_PackageBooking $PackageBookingRQ
     * @return PackageBooking
     */
    public function setPackageBookingRQ($PackageBookingRQ)
    {
      $this->PackageBookingRQ = $PackageBookingRQ;
      return $this;
    }

}

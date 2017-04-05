<?php

namespace Juniper\Webservice;

class JP_PackageRequiredFields
{

    /**
     * @var JP_PackageBooking $PackageBooking
     */
    protected $PackageBooking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageBooking
     */
    public function getPackageBooking()
    {
      return $this->PackageBooking;
    }

    /**
     * @param JP_PackageBooking $PackageBooking
     * @return JP_PackageRequiredFields
     */
    public function setPackageBooking($PackageBooking)
    {
      $this->PackageBooking = $PackageBooking;
      return $this;
    }

}

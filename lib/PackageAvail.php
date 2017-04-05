<?php

namespace Juniper\Webservice;

class PackageAvail
{

    /**
     * @var JP_PackageAvailabilityRQ $PackageAvailRQ
     */
    protected $PackageAvailRQ = null;

    /**
     * @param JP_PackageAvailabilityRQ $PackageAvailRQ
     */
    public function __construct($PackageAvailRQ)
    {
      $this->PackageAvailRQ = $PackageAvailRQ;
    }

    /**
     * @return JP_PackageAvailabilityRQ
     */
    public function getPackageAvailRQ()
    {
      return $this->PackageAvailRQ;
    }

    /**
     * @param JP_PackageAvailabilityRQ $PackageAvailRQ
     * @return PackageAvail
     */
    public function setPackageAvailRQ($PackageAvailRQ)
    {
      $this->PackageAvailRQ = $PackageAvailRQ;
      return $this;
    }

}

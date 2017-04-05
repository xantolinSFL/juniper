<?php

namespace Juniper\Webservice;

class PackageCheckAvail
{

    /**
     * @var JP_PackageCheckAvailRQ $PackageCheckAvailRQ
     */
    protected $PackageCheckAvailRQ = null;

    /**
     * @param JP_PackageCheckAvailRQ $PackageCheckAvailRQ
     */
    public function __construct($PackageCheckAvailRQ)
    {
      $this->PackageCheckAvailRQ = $PackageCheckAvailRQ;
    }

    /**
     * @return JP_PackageCheckAvailRQ
     */
    public function getPackageCheckAvailRQ()
    {
      return $this->PackageCheckAvailRQ;
    }

    /**
     * @param JP_PackageCheckAvailRQ $PackageCheckAvailRQ
     * @return PackageCheckAvail
     */
    public function setPackageCheckAvailRQ($PackageCheckAvailRQ)
    {
      $this->PackageCheckAvailRQ = $PackageCheckAvailRQ;
      return $this;
    }

}

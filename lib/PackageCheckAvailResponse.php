<?php

namespace Juniper\Webservice;

class PackageCheckAvailResponse
{

    /**
     * @var JP_CheckAvailRS $PackageCheckAvailRS
     */
    protected $PackageCheckAvailRS = null;

    /**
     * @param JP_CheckAvailRS $PackageCheckAvailRS
     */
    public function __construct($PackageCheckAvailRS)
    {
      $this->PackageCheckAvailRS = $PackageCheckAvailRS;
    }

    /**
     * @return JP_CheckAvailRS
     */
    public function getPackageCheckAvailRS()
    {
      return $this->PackageCheckAvailRS;
    }

    /**
     * @param JP_CheckAvailRS $PackageCheckAvailRS
     * @return PackageCheckAvailResponse
     */
    public function setPackageCheckAvailRS($PackageCheckAvailRS)
    {
      $this->PackageCheckAvailRS = $PackageCheckAvailRS;
      return $this;
    }

}

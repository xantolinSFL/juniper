<?php

namespace Juniper\Webservice;

class PackageListResponse
{

    /**
     * @var JP_StaticDataRS $PackageListRS
     */
    protected $PackageListRS = null;

    /**
     * @param JP_StaticDataRS $PackageListRS
     */
    public function __construct($PackageListRS)
    {
      $this->PackageListRS = $PackageListRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getPackageListRS()
    {
      return $this->PackageListRS;
    }

    /**
     * @param JP_StaticDataRS $PackageListRS
     * @return PackageListResponse
     */
    public function setPackageListRS($PackageListRS)
    {
      $this->PackageListRS = $PackageListRS;
      return $this;
    }

}

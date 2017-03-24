<?php

class PackageList
{

    /**
     * @var JP_PackageListRQ $PackageListRQ
     */
    protected $PackageListRQ = null;

    /**
     * @param JP_PackageListRQ $PackageListRQ
     */
    public function __construct($PackageListRQ)
    {
      $this->PackageListRQ = $PackageListRQ;
    }

    /**
     * @return JP_PackageListRQ
     */
    public function getPackageListRQ()
    {
      return $this->PackageListRQ;
    }

    /**
     * @param JP_PackageListRQ $PackageListRQ
     * @return PackageList
     */
    public function setPackageListRQ($PackageListRQ)
    {
      $this->PackageListRQ = $PackageListRQ;
      return $this;
    }

}

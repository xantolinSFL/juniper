<?php

class PackageSearcherResponse
{

    /**
     * @var JP_StaticDataRS $PackageSearcherRS
     */
    protected $PackageSearcherRS = null;

    /**
     * @param JP_StaticDataRS $PackageSearcherRS
     */
    public function __construct($PackageSearcherRS)
    {
      $this->PackageSearcherRS = $PackageSearcherRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getPackageSearcherRS()
    {
      return $this->PackageSearcherRS;
    }

    /**
     * @param JP_StaticDataRS $PackageSearcherRS
     * @return PackageSearcherResponse
     */
    public function setPackageSearcherRS($PackageSearcherRS)
    {
      $this->PackageSearcherRS = $PackageSearcherRS;
      return $this;
    }

}

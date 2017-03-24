<?php

class PackageChangeProduct
{

    /**
     * @var JP_PackageChangeProductRQ $PackageChangeProductRQ
     */
    protected $PackageChangeProductRQ = null;

    /**
     * @param JP_PackageChangeProductRQ $PackageChangeProductRQ
     */
    public function __construct($PackageChangeProductRQ)
    {
      $this->PackageChangeProductRQ = $PackageChangeProductRQ;
    }

    /**
     * @return JP_PackageChangeProductRQ
     */
    public function getPackageChangeProductRQ()
    {
      return $this->PackageChangeProductRQ;
    }

    /**
     * @param JP_PackageChangeProductRQ $PackageChangeProductRQ
     * @return PackageChangeProduct
     */
    public function setPackageChangeProductRQ($PackageChangeProductRQ)
    {
      $this->PackageChangeProductRQ = $PackageChangeProductRQ;
      return $this;
    }

}

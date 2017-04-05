<?php

namespace Juniper\Webservice;

class PackageContent
{

    /**
     * @var JP_PackageContentRQ $PackageContentRQ
     */
    protected $PackageContentRQ = null;

    /**
     * @param JP_PackageContentRQ $PackageContentRQ
     */
    public function __construct($PackageContentRQ)
    {
      $this->PackageContentRQ = $PackageContentRQ;
    }

    /**
     * @return JP_PackageContentRQ
     */
    public function getPackageContentRQ()
    {
      return $this->PackageContentRQ;
    }

    /**
     * @param JP_PackageContentRQ $PackageContentRQ
     * @return PackageContent
     */
    public function setPackageContentRQ($PackageContentRQ)
    {
      $this->PackageContentRQ = $PackageContentRQ;
      return $this;
    }

}

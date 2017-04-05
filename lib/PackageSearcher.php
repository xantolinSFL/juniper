<?php

namespace Juniper\Webservice;

class PackageSearcher
{

    /**
     * @var JP_PackageSearcherRQ $PackageSearcherRQ
     */
    protected $PackageSearcherRQ = null;

    /**
     * @param JP_PackageSearcherRQ $PackageSearcherRQ
     */
    public function __construct($PackageSearcherRQ)
    {
      $this->PackageSearcherRQ = $PackageSearcherRQ;
    }

    /**
     * @return JP_PackageSearcherRQ
     */
    public function getPackageSearcherRQ()
    {
      return $this->PackageSearcherRQ;
    }

    /**
     * @param JP_PackageSearcherRQ $PackageSearcherRQ
     * @return PackageSearcher
     */
    public function setPackageSearcherRQ($PackageSearcherRQ)
    {
      $this->PackageSearcherRQ = $PackageSearcherRQ;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JP_PackageList
{

    /**
     * @var ArrayOfJP_PackagesCodeList $Packages
     */
    protected $Packages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_PackagesCodeList
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param ArrayOfJP_PackagesCodeList $Packages
     * @return JP_PackageList
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

}

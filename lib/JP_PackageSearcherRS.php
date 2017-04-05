<?php

namespace Juniper\Webservice;

class JP_PackageSearcherRS
{

    /**
     * @var ArrayOfJP_PackageSearcherItem $PackageSearcherItems
     */
    protected $PackageSearcherItems = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_PackageSearcherItem
     */
    public function getPackageSearcherItems()
    {
      return $this->PackageSearcherItems;
    }

    /**
     * @param ArrayOfJP_PackageSearcherItem $PackageSearcherItems
     * @return JP_PackageSearcherRS
     */
    public function setPackageSearcherItems($PackageSearcherItems)
    {
      $this->PackageSearcherItems = $PackageSearcherItems;
      return $this;
    }

}

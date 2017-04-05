<?php

namespace Juniper\Webservice;

class JP_PackageElements
{

    /**
     * @var JP_PackageElement $PackageElement
     */
    protected $PackageElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageElement
     */
    public function getPackageElement()
    {
      return $this->PackageElement;
    }

    /**
     * @param JP_PackageElement $PackageElement
     * @return JP_PackageElements
     */
    public function setPackageElement($PackageElement)
    {
      $this->PackageElement = $PackageElement;
      return $this;
    }

}

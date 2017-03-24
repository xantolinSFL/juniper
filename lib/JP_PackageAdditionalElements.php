<?php

class JP_PackageAdditionalElements
{

    /**
     * @var ArrayOfJP_PackageAdditionalElement $PackageSupplements
     */
    protected $PackageSupplements = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_PackageAdditionalElement
     */
    public function getPackageSupplements()
    {
      return $this->PackageSupplements;
    }

    /**
     * @param ArrayOfJP_PackageAdditionalElement $PackageSupplements
     * @return JP_PackageAdditionalElements
     */
    public function setPackageSupplements($PackageSupplements)
    {
      $this->PackageSupplements = $PackageSupplements;
      return $this;
    }

}

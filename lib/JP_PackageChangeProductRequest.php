<?php

class JP_PackageChangeProductRequest
{

    /**
     * @var JP_PackageOptionChangeProduct $PackageOption
     */
    protected $PackageOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageOptionChangeProduct
     */
    public function getPackageOption()
    {
      return $this->PackageOption;
    }

    /**
     * @param JP_PackageOptionChangeProduct $PackageOption
     * @return JP_PackageChangeProductRequest
     */
    public function setPackageOption($PackageOption)
    {
      $this->PackageOption = $PackageOption;
      return $this;
    }

}

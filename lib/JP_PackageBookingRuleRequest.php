<?php

class JP_PackageBookingRuleRequest
{

    /**
     * @var JP_PackageOptionRQ $PackageOption
     */
    protected $PackageOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageOptionRQ
     */
    public function getPackageOption()
    {
      return $this->PackageOption;
    }

    /**
     * @param JP_PackageOptionRQ $PackageOption
     * @return JP_PackageBookingRuleRequest
     */
    public function setPackageOption($PackageOption)
    {
      $this->PackageOption = $PackageOption;
      return $this;
    }

}

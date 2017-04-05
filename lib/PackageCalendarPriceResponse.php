<?php

namespace Juniper\Webservice;

class PackageCalendarPriceResponse
{

    /**
     * @var JP_StaticDataRS $PackageCalendarPriceRS
     */
    protected $PackageCalendarPriceRS = null;

    /**
     * @param JP_StaticDataRS $PackageCalendarPriceRS
     */
    public function __construct($PackageCalendarPriceRS)
    {
      $this->PackageCalendarPriceRS = $PackageCalendarPriceRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getPackageCalendarPriceRS()
    {
      return $this->PackageCalendarPriceRS;
    }

    /**
     * @param JP_StaticDataRS $PackageCalendarPriceRS
     * @return PackageCalendarPriceResponse
     */
    public function setPackageCalendarPriceRS($PackageCalendarPriceRS)
    {
      $this->PackageCalendarPriceRS = $PackageCalendarPriceRS;
      return $this;
    }

}

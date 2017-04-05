<?php

namespace Juniper\Webservice;

class PackageCalendarPrice
{

    /**
     * @var JP_PackageCalendarPriceRQ $PackageCalendarPriceRQ
     */
    protected $PackageCalendarPriceRQ = null;

    /**
     * @param JP_PackageCalendarPriceRQ $PackageCalendarPriceRQ
     */
    public function __construct($PackageCalendarPriceRQ)
    {
      $this->PackageCalendarPriceRQ = $PackageCalendarPriceRQ;
    }

    /**
     * @return JP_PackageCalendarPriceRQ
     */
    public function getPackageCalendarPriceRQ()
    {
      return $this->PackageCalendarPriceRQ;
    }

    /**
     * @param JP_PackageCalendarPriceRQ $PackageCalendarPriceRQ
     * @return PackageCalendarPrice
     */
    public function setPackageCalendarPriceRQ($PackageCalendarPriceRQ)
    {
      $this->PackageCalendarPriceRQ = $PackageCalendarPriceRQ;
      return $this;
    }

}

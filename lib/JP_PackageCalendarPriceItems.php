<?php

class JP_PackageCalendarPriceItems
{

    /**
     * @var JP_PackageCalendarPriceItem[] $PackageCalendarPriceItem
     */
    protected $PackageCalendarPriceItem = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var int $OriginZone
     */
    protected $OriginZone = null;

    /**
     * @var int $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @param string $Code
     * @param int $OriginZone
     * @param int $DestinationZone
     * @param string $Currency
     */
    public function __construct($Code, $OriginZone, $DestinationZone, $Currency)
    {
      $this->Code = $Code;
      $this->OriginZone = $OriginZone;
      $this->DestinationZone = $DestinationZone;
      $this->Currency = $Currency;
    }

    /**
     * @return JP_PackageCalendarPriceItem[]
     */
    public function getPackageCalendarPriceItem()
    {
      return $this->PackageCalendarPriceItem;
    }

    /**
     * @param JP_PackageCalendarPriceItem[] $PackageCalendarPriceItem
     * @return JP_PackageCalendarPriceItems
     */
    public function setPackageCalendarPriceItem(array $PackageCalendarPriceItem = null)
    {
      $this->PackageCalendarPriceItem = $PackageCalendarPriceItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_PackageCalendarPriceItems
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginZone()
    {
      return $this->OriginZone;
    }

    /**
     * @param int $OriginZone
     * @return JP_PackageCalendarPriceItems
     */
    public function setOriginZone($OriginZone)
    {
      $this->OriginZone = $OriginZone;
      return $this;
    }

    /**
     * @return int
     */
    public function getDestinationZone()
    {
      return $this->DestinationZone;
    }

    /**
     * @param int $DestinationZone
     * @return JP_PackageCalendarPriceItems
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return JP_PackageCalendarPriceItems
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

}

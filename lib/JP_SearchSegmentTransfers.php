<?php

class JP_SearchSegmentTransfers extends JP_SearchSegmentBase
{

    /**
     * @var ArrayOfString3 $Suppliers
     */
    protected $Suppliers = null;

    /**
     * @var time $Hour
     */
    protected $Hour = null;

    /**
     * @var time $HourEnd
     */
    protected $HourEnd = null;

    /**
     * @var int $Type
     */
    protected $Type = null;

    /**
     * @var int $InternalSupplier
     */
    protected $InternalSupplier = null;

    /**
     * @var JP_RouteType $Route
     */
    protected $Route = null;

    /**
     * @param date $Start
     * @param date $End
     * @param int $OriginZone
     * @param string $JPDCode
     * @param int $DestinationZone
     * @param time $Hour
     * @param time $HourEnd
     * @param int $Type
     * @param int $InternalSupplier
     * @param JP_RouteType $Route
     */
    public function __construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone, $Hour, $HourEnd, $Type, $InternalSupplier, $Route)
    {
      parent::__construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone);
      $this->Hour = $Hour;
      $this->HourEnd = $HourEnd;
      $this->Type = $Type;
      $this->InternalSupplier = $InternalSupplier;
      $this->Route = $Route;
    }

    /**
     * @return ArrayOfString3
     */
    public function getSuppliers()
    {
      return $this->Suppliers;
    }

    /**
     * @param ArrayOfString3 $Suppliers
     * @return JP_SearchSegmentTransfers
     */
    public function setSuppliers($Suppliers)
    {
      $this->Suppliers = $Suppliers;
      return $this;
    }

    /**
     * @return time
     */
    public function getHour()
    {
      return $this->Hour;
    }

    /**
     * @param time $Hour
     * @return JP_SearchSegmentTransfers
     */
    public function setHour($Hour)
    {
      $this->Hour = $Hour;
      return $this;
    }

    /**
     * @return time
     */
    public function getHourEnd()
    {
      return $this->HourEnd;
    }

    /**
     * @param time $HourEnd
     * @return JP_SearchSegmentTransfers
     */
    public function setHourEnd($HourEnd)
    {
      $this->HourEnd = $HourEnd;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param int $Type
     * @return JP_SearchSegmentTransfers
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getInternalSupplier()
    {
      return $this->InternalSupplier;
    }

    /**
     * @param int $InternalSupplier
     * @return JP_SearchSegmentTransfers
     */
    public function setInternalSupplier($InternalSupplier)
    {
      $this->InternalSupplier = $InternalSupplier;
      return $this;
    }

    /**
     * @return JP_RouteType
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param JP_RouteType $Route
     * @return JP_SearchSegmentTransfers
     */
    public function setRoute($Route)
    {
      $this->Route = $Route;
      return $this;
    }

}

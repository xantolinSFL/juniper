<?php

namespace Juniper\Webservice;

class JP_PackageSearcherRequest
{

    /**
     * @var ArrayOfString3 $Suppliers
     */
    protected $Suppliers = null;

    /**
     * @var int $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @var int $OriginZone
     */
    protected $OriginZone = null;

    /**
     * @var date $Date
     */
    protected $Date = null;

    /**
     * @var int $Duration
     */
    protected $Duration = null;

    /**
     * @param int $DestinationZone
     * @param int $OriginZone
     * @param date $Date
     * @param int $Duration
     */
    public function __construct($DestinationZone, $OriginZone, $Date, $Duration)
    {
      $this->DestinationZone = $DestinationZone;
      $this->OriginZone = $OriginZone;
      $this->Date = $Date;
      $this->Duration = $Duration;
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
     * @return JP_PackageSearcherRequest
     */
    public function setSuppliers($Suppliers)
    {
      $this->Suppliers = $Suppliers;
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
     * @return JP_PackageSearcherRequest
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
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
     * @return JP_PackageSearcherRequest
     */
    public function setOriginZone($OriginZone)
    {
      $this->OriginZone = $OriginZone;
      return $this;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param date $Date
     * @return JP_PackageSearcherRequest
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param int $Duration
     * @return JP_PackageSearcherRequest
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

}

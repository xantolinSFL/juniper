<?php

class JP_PackageListRequest
{

    /**
     * @var ArrayOfString3 $Suppliers
     */
    protected $Suppliers = null;

    /**
     * @var int $OriginZone
     */
    protected $OriginZone = null;

    /**
     * @var int $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @var boolean $Masters
     */
    protected $Masters = null;

    /**
     * @param int $OriginZone
     * @param int $DestinationZone
     * @param boolean $Masters
     */
    public function __construct($OriginZone, $DestinationZone, $Masters)
    {
      $this->OriginZone = $OriginZone;
      $this->DestinationZone = $DestinationZone;
      $this->Masters = $Masters;
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
     * @return JP_PackageListRequest
     */
    public function setSuppliers($Suppliers)
    {
      $this->Suppliers = $Suppliers;
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
     * @return JP_PackageListRequest
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
     * @return JP_PackageListRequest
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMasters()
    {
      return $this->Masters;
    }

    /**
     * @param boolean $Masters
     * @return JP_PackageListRequest
     */
    public function setMasters($Masters)
    {
      $this->Masters = $Masters;
      return $this;
    }

}

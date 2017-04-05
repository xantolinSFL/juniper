<?php

namespace Juniper\Webservice;

class JP_RentacarLocationListRequest
{

    /**
     * @var ArrayOfString3 $Suppliers
     */
    protected $Suppliers = null;

    /**
     * @var int $ZoneCode
     */
    protected $ZoneCode = null;

    /**
     * @var boolean $ShowBasicInfo
     */
    protected $ShowBasicInfo = null;

    /**
     * @param int $ZoneCode
     * @param boolean $ShowBasicInfo
     */
    public function __construct($ZoneCode, $ShowBasicInfo)
    {
      $this->ZoneCode = $ZoneCode;
      $this->ShowBasicInfo = $ShowBasicInfo;
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
     * @return JP_RentacarLocationListRequest
     */
    public function setSuppliers($Suppliers)
    {
      $this->Suppliers = $Suppliers;
      return $this;
    }

    /**
     * @return int
     */
    public function getZoneCode()
    {
      return $this->ZoneCode;
    }

    /**
     * @param int $ZoneCode
     * @return JP_RentacarLocationListRequest
     */
    public function setZoneCode($ZoneCode)
    {
      $this->ZoneCode = $ZoneCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowBasicInfo()
    {
      return $this->ShowBasicInfo;
    }

    /**
     * @param boolean $ShowBasicInfo
     * @return JP_RentacarLocationListRequest
     */
    public function setShowBasicInfo($ShowBasicInfo)
    {
      $this->ShowBasicInfo = $ShowBasicInfo;
      return $this;
    }

}

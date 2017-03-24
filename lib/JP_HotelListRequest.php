<?php

class JP_HotelListRequest
{

    /**
     * @var ArrayOfString3 $Suppliers
     */
    protected $Suppliers = null;

    /**
     * @var string $ZoneCode
     */
    protected $ZoneCode = null;

    /**
     * @var boolean $ShowBasicInfo
     */
    protected $ShowBasicInfo = null;

    /**
     * @param string $ZoneCode
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
     * @return JP_HotelListRequest
     */
    public function setSuppliers($Suppliers)
    {
      $this->Suppliers = $Suppliers;
      return $this;
    }

    /**
     * @return string
     */
    public function getZoneCode()
    {
      return $this->ZoneCode;
    }

    /**
     * @param string $ZoneCode
     * @return JP_HotelListRequest
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
     * @return JP_HotelListRequest
     */
    public function setShowBasicInfo($ShowBasicInfo)
    {
      $this->ShowBasicInfo = $ShowBasicInfo;
      return $this;
    }

}

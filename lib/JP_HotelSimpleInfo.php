<?php

namespace Juniper\Webservice;

class JP_HotelSimpleInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JP_Zone $Zone
     */
    protected $Zone = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $JPCode
     */
    protected $JPCode = null;

    /**
     * @var string $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @param string $Code
     * @param string $JPCode
     * @param string $SupplierCode
     */
    public function __construct($Code, $JPCode, $SupplierCode)
    {
      $this->Code = $Code;
      $this->JPCode = $JPCode;
      $this->SupplierCode = $SupplierCode;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_HotelSimpleInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return JP_Zone
     */
    public function getZone()
    {
      return $this->Zone;
    }

    /**
     * @param JP_Zone $Zone
     * @return JP_HotelSimpleInfo
     */
    public function setZone($Zone)
    {
      $this->Zone = $Zone;
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
     * @return JP_HotelSimpleInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getJPCode()
    {
      return $this->JPCode;
    }

    /**
     * @param string $JPCode
     * @return JP_HotelSimpleInfo
     */
    public function setJPCode($JPCode)
    {
      $this->JPCode = $JPCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param string $SupplierCode
     * @return JP_HotelSimpleInfo
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}

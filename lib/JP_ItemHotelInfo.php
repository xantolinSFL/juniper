<?php

class JP_ItemHotelInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var JP_HotelCategory $HotelCategory
     */
    protected $HotelCategory = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $JPCode
     */
    protected $JPCode = null;

    /**
     * @var string $JPDCode
     */
    protected $JPDCode = null;

    /**
     * @var int $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @param string $Code
     * @param string $JPCode
     * @param string $JPDCode
     * @param int $DestinationZone
     */
    public function __construct($Code, $JPCode, $JPDCode, $DestinationZone)
    {
      $this->Code = $Code;
      $this->JPCode = $JPCode;
      $this->JPDCode = $JPDCode;
      $this->DestinationZone = $DestinationZone;
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
     * @return JP_ItemHotelInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_ItemHotelInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return JP_HotelCategory
     */
    public function getHotelCategory()
    {
      return $this->HotelCategory;
    }

    /**
     * @param JP_HotelCategory $HotelCategory
     * @return JP_ItemHotelInfo
     */
    public function setHotelCategory($HotelCategory)
    {
      $this->HotelCategory = $HotelCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return JP_ItemHotelInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
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
     * @return JP_ItemHotelInfo
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
     * @return JP_ItemHotelInfo
     */
    public function setJPCode($JPCode)
    {
      $this->JPCode = $JPCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getJPDCode()
    {
      return $this->JPDCode;
    }

    /**
     * @param string $JPDCode
     * @return JP_ItemHotelInfo
     */
    public function setJPDCode($JPDCode)
    {
      $this->JPDCode = $JPDCode;
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
     * @return JP_ItemHotelInfo
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
      return $this;
    }

}

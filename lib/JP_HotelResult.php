<?php

namespace Juniper\Webservice;

class JP_HotelResult
{

    /**
     * @var JP_HotelInfo $HotelInfo
     */
    protected $HotelInfo = null;

    /**
     * @var ArrayOfJP_HotelOption $HotelOptions
     */
    protected $HotelOptions = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $JPCode
     */
    protected $JPCode = null;

    /**
     * @var string $OriginZone
     */
    protected $OriginZone = null;

    /**
     * @var string $JPDCode
     */
    protected $JPDCode = null;

    /**
     * @var string $ResultType
     */
    protected $ResultType = null;

    /**
     * @var string $SubType
     */
    protected $SubType = null;

    /**
     * @var boolean $BestDeal
     */
    protected $BestDeal = null;

    /**
     * @var string $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @param string $Code
     * @param string $JPCode
     * @param string $OriginZone
     * @param string $JPDCode
     * @param string $ResultType
     * @param string $SubType
     * @param boolean $BestDeal
     * @param string $DestinationZone
     */
    public function __construct($Code, $JPCode, $OriginZone, $JPDCode, $ResultType, $SubType, $BestDeal, $DestinationZone)
    {
      $this->Code = $Code;
      $this->JPCode = $JPCode;
      $this->OriginZone = $OriginZone;
      $this->JPDCode = $JPDCode;
      $this->ResultType = $ResultType;
      $this->SubType = $SubType;
      $this->BestDeal = $BestDeal;
      $this->DestinationZone = $DestinationZone;
    }

    /**
     * @return JP_HotelInfo
     */
    public function getHotelInfo()
    {
      return $this->HotelInfo;
    }

    /**
     * @param JP_HotelInfo $HotelInfo
     * @return JP_HotelResult
     */
    public function setHotelInfo($HotelInfo)
    {
      $this->HotelInfo = $HotelInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelOption
     */
    public function getHotelOptions()
    {
      return $this->HotelOptions;
    }

    /**
     * @param ArrayOfJP_HotelOption $HotelOptions
     * @return JP_HotelResult
     */
    public function setHotelOptions($HotelOptions)
    {
      $this->HotelOptions = $HotelOptions;
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
     * @return JP_HotelResult
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
     * @return JP_HotelResult
     */
    public function setJPCode($JPCode)
    {
      $this->JPCode = $JPCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginZone()
    {
      return $this->OriginZone;
    }

    /**
     * @param string $OriginZone
     * @return JP_HotelResult
     */
    public function setOriginZone($OriginZone)
    {
      $this->OriginZone = $OriginZone;
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
     * @return JP_HotelResult
     */
    public function setJPDCode($JPDCode)
    {
      $this->JPDCode = $JPDCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getResultType()
    {
      return $this->ResultType;
    }

    /**
     * @param string $ResultType
     * @return JP_HotelResult
     */
    public function setResultType($ResultType)
    {
      $this->ResultType = $ResultType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubType()
    {
      return $this->SubType;
    }

    /**
     * @param string $SubType
     * @return JP_HotelResult
     */
    public function setSubType($SubType)
    {
      $this->SubType = $SubType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBestDeal()
    {
      return $this->BestDeal;
    }

    /**
     * @param boolean $BestDeal
     * @return JP_HotelResult
     */
    public function setBestDeal($BestDeal)
    {
      $this->BestDeal = $BestDeal;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationZone()
    {
      return $this->DestinationZone;
    }

    /**
     * @param string $DestinationZone
     * @return JP_HotelResult
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
      return $this;
    }

}

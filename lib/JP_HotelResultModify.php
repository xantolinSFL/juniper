<?php

namespace Juniper\Webservice;

class JP_HotelResultModify
{

    /**
     * @var JP_HotelInfo $HotelInfo
     */
    protected $HotelInfo = null;

    /**
     * @var ArrayOfJP_HotelOptionModify $HotelOptions
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
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @var string $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @var string $JPDCode
     */
    protected $JPDCode = null;

    /**
     * @param string $Code
     * @param string $JPCode
     * @param date $Start
     * @param date $End
     * @param string $DestinationZone
     * @param string $JPDCode
     */
    public function __construct($Code, $JPCode, $Start, $End, $DestinationZone, $JPDCode)
    {
      $this->Code = $Code;
      $this->JPCode = $JPCode;
      $this->Start = $Start;
      $this->End = $End;
      $this->DestinationZone = $DestinationZone;
      $this->JPDCode = $JPDCode;
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
     * @return JP_HotelResultModify
     */
    public function setHotelInfo($HotelInfo)
    {
      $this->HotelInfo = $HotelInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelOptionModify
     */
    public function getHotelOptions()
    {
      return $this->HotelOptions;
    }

    /**
     * @param ArrayOfJP_HotelOptionModify $HotelOptions
     * @return JP_HotelResultModify
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
     * @return JP_HotelResultModify
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
     * @return JP_HotelResultModify
     */
    public function setJPCode($JPCode)
    {
      $this->JPCode = $JPCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param date $Start
     * @return JP_HotelResultModify
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return JP_HotelResultModify
     */
    public function setEnd($End)
    {
      $this->End = $End;
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
     * @return JP_HotelResultModify
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
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
     * @return JP_HotelResultModify
     */
    public function setJPDCode($JPDCode)
    {
      $this->JPDCode = $JPDCode;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JPSOAP_PickUpPoint
{

    /**
     * @var string $Area
     */
    protected $Area = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var int $AreaCode
     */
    protected $AreaCode = null;

    /**
     * @var string $Hour
     */
    protected $Hour = null;

    /**
     * @param int $AreaCode
     * @param string $Hour
     */
    public function __construct($AreaCode, $Hour)
    {
      $this->AreaCode = $AreaCode;
      $this->Hour = $Hour;
    }

    /**
     * @return string
     */
    public function getArea()
    {
      return $this->Area;
    }

    /**
     * @param string $Area
     * @return JPSOAP_PickUpPoint
     */
    public function setArea($Area)
    {
      $this->Area = $Area;
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
     * @return JPSOAP_PickUpPoint
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return int
     */
    public function getAreaCode()
    {
      return $this->AreaCode;
    }

    /**
     * @param int $AreaCode
     * @return JPSOAP_PickUpPoint
     */
    public function setAreaCode($AreaCode)
    {
      $this->AreaCode = $AreaCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHour()
    {
      return $this->Hour;
    }

    /**
     * @param string $Hour
     * @return JPSOAP_PickUpPoint
     */
    public function setHour($Hour)
    {
      $this->Hour = $Hour;
      return $this;
    }

}

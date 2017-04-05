<?php

namespace Juniper\Webservice;

class JPSOAP_Contract
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $HotelCodeEncrypt
     */
    protected $HotelCodeEncrypt = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @var boolean $Delta
     */
    protected $Delta = null;

    /**
     * @param string $Code
     * @param string $HotelCode
     * @param string $HotelCodeEncrypt
     * @param boolean $Active
     * @param boolean $Delta
     */
    public function __construct($Code, $HotelCode, $HotelCodeEncrypt, $Active, $Delta)
    {
      $this->Code = $Code;
      $this->HotelCode = $HotelCode;
      $this->HotelCodeEncrypt = $HotelCodeEncrypt;
      $this->Active = $Active;
      $this->Delta = $Delta;
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
     * @return JPSOAP_Contract
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return JPSOAP_Contract
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return JPSOAP_Contract
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCodeEncrypt()
    {
      return $this->HotelCodeEncrypt;
    }

    /**
     * @param string $HotelCodeEncrypt
     * @return JPSOAP_Contract
     */
    public function setHotelCodeEncrypt($HotelCodeEncrypt)
    {
      $this->HotelCodeEncrypt = $HotelCodeEncrypt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return JPSOAP_Contract
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDelta()
    {
      return $this->Delta;
    }

    /**
     * @param boolean $Delta
     * @return JPSOAP_Contract
     */
    public function setDelta($Delta)
    {
      $this->Delta = $Delta;
      return $this;
    }

}

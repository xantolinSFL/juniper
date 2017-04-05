<?php

namespace Juniper\Webservice;

class JP_HotelAllotmentRS
{

    /**
     * @var JPSOAP_HotelAvailContract[] $Contract
     */
    protected $Contract = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var string $HotelCodeEncrypt
     */
    protected $HotelCodeEncrypt = null;

    /**
     * @param string $HotelCode
     * @param string $HotelCodeEncrypt
     */
    public function __construct($HotelCode, $HotelCodeEncrypt)
    {
      $this->HotelCode = $HotelCode;
      $this->HotelCodeEncrypt = $HotelCodeEncrypt;
    }

    /**
     * @return JPSOAP_HotelAvailContract[]
     */
    public function getContract()
    {
      return $this->Contract;
    }

    /**
     * @param JPSOAP_HotelAvailContract[] $Contract
     * @return JP_HotelAllotmentRS
     */
    public function setContract(array $Contract = null)
    {
      $this->Contract = $Contract;
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
     * @return JP_HotelAllotmentRS
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
     * @return JP_HotelAllotmentRS
     */
    public function setHotelCodeEncrypt($HotelCodeEncrypt)
    {
      $this->HotelCodeEncrypt = $HotelCodeEncrypt;
      return $this;
    }

}

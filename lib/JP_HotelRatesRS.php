<?php

class JP_HotelRatesRS
{

    /**
     * @var JPSOAP_HotelRatePlanContract[] $Contract
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
     * @return JPSOAP_HotelRatePlanContract[]
     */
    public function getContract()
    {
      return $this->Contract;
    }

    /**
     * @param JPSOAP_HotelRatePlanContract[] $Contract
     * @return JP_HotelRatesRS
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
     * @return JP_HotelRatesRS
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
     * @return JP_HotelRatesRS
     */
    public function setHotelCodeEncrypt($HotelCodeEncrypt)
    {
      $this->HotelCodeEncrypt = $HotelCodeEncrypt;
      return $this;
    }

}

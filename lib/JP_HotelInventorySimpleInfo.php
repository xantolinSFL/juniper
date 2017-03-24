<?php

class JP_HotelInventorySimpleInfo extends JP_HotelSimpleInfo
{

    /**
     * @var string $HotelCodeEncrypt
     */
    protected $HotelCodeEncrypt = null;

    /**
     * @param string $Code
     * @param string $JPCode
     * @param string $SupplierCode
     * @param string $HotelCodeEncrypt
     */
    public function __construct($Code, $JPCode, $SupplierCode, $HotelCodeEncrypt)
    {
      parent::__construct($Code, $JPCode, $SupplierCode);
      $this->HotelCodeEncrypt = $HotelCodeEncrypt;
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
     * @return JP_HotelInventorySimpleInfo
     */
    public function setHotelCodeEncrypt($HotelCodeEncrypt)
    {
      $this->HotelCodeEncrypt = $HotelCodeEncrypt;
      return $this;
    }

}

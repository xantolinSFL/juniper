<?php

class JP_HotelInfoPortfolio extends JP_ExtendedHotelInfo
{

    /**
     * @var JP_City $City
     */
    protected $City = null;

    /**
     * @param string $Code
     * @param string $JPCode
     * @param string $SupplierCode
     */
    public function __construct($Code, $JPCode, $SupplierCode)
    {
      parent::__construct($Code, $JPCode, $SupplierCode);
    }

    /**
     * @return JP_City
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param JP_City $City
     * @return JP_HotelInfoPortfolio
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

}

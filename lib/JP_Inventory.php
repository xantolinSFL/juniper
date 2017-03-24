<?php

class JP_Inventory
{

    /**
     * @var JP_HotelAllotmentRS[] $HotelAllotment
     */
    protected $HotelAllotment = null;

    /**
     * @var JP_HotelRatesRS[] $HotelRates
     */
    protected $HotelRates = null;

    /**
     * @var JPSOAP_HotelInventoryHotel[] $HotelSpecifications
     */
    protected $HotelSpecifications = null;

    /**
     * @var ArrayOfJP_HotelInventorySimpleInfo $HotelListInventory
     */
    protected $HotelListInventory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelAllotmentRS[]
     */
    public function getHotelAllotment()
    {
      return $this->HotelAllotment;
    }

    /**
     * @param JP_HotelAllotmentRS[] $HotelAllotment
     * @return JP_Inventory
     */
    public function setHotelAllotment(array $HotelAllotment = null)
    {
      $this->HotelAllotment = $HotelAllotment;
      return $this;
    }

    /**
     * @return JP_HotelRatesRS[]
     */
    public function getHotelRates()
    {
      return $this->HotelRates;
    }

    /**
     * @param JP_HotelRatesRS[] $HotelRates
     * @return JP_Inventory
     */
    public function setHotelRates(array $HotelRates = null)
    {
      $this->HotelRates = $HotelRates;
      return $this;
    }

    /**
     * @return JPSOAP_HotelInventoryHotel[]
     */
    public function getHotelSpecifications()
    {
      return $this->HotelSpecifications;
    }

    /**
     * @param JPSOAP_HotelInventoryHotel[] $HotelSpecifications
     * @return JP_Inventory
     */
    public function setHotelSpecifications(array $HotelSpecifications = null)
    {
      $this->HotelSpecifications = $HotelSpecifications;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelInventorySimpleInfo
     */
    public function getHotelListInventory()
    {
      return $this->HotelListInventory;
    }

    /**
     * @param ArrayOfJP_HotelInventorySimpleInfo $HotelListInventory
     * @return JP_Inventory
     */
    public function setHotelListInventory($HotelListInventory)
    {
      $this->HotelListInventory = $HotelListInventory;
      return $this;
    }

}

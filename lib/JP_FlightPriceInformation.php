<?php

class JP_FlightPriceInformation
{

    /**
     * @var JP_Routes $Routes
     */
    protected $Routes = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var JP_AdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Routes
     */
    public function getRoutes()
    {
      return $this->Routes;
    }

    /**
     * @param JP_Routes $Routes
     * @return JP_FlightPriceInformation
     */
    public function setRoutes($Routes)
    {
      $this->Routes = $Routes;
      return $this;
    }

    /**
     * @return ArrayOfJP_Price
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfJP_Price $Prices
     * @return JP_FlightPriceInformation
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return JP_AdditionalElements
     */
    public function getAdditionalElements()
    {
      return $this->AdditionalElements;
    }

    /**
     * @param JP_AdditionalElements $AdditionalElements
     * @return JP_FlightPriceInformation
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

}

<?php

class JP_SearchSegmentFlight
{

    /**
     * @var string $CountryOfResidence
     */
    protected $CountryOfResidence = null;

    /**
     * @var ArrayOfJP_RouteDispo $Routes
     */
    protected $Routes = null;

    /**
     * @var JP_FlightDiscount $Discount
     */
    protected $Discount = null;

    /**
     * @var ArrayOfJP_Airline $Airlines
     */
    protected $Airlines = null;

    /**
     * @var JP_CabinType $Cabin
     */
    protected $Cabin = null;

    /**
     * @var string $Class
     */
    protected $Class = null;

    /**
     * @var boolean $LowCost
     */
    protected $LowCost = null;

    /**
     * @var int $Stops
     */
    protected $Stops = null;

    /**
     * @param JP_CabinType $Cabin
     * @param string $Class
     * @param boolean $LowCost
     * @param int $Stops
     */
    public function __construct($Cabin, $Class, $LowCost, $Stops)
    {
      $this->Cabin = $Cabin;
      $this->Class = $Class;
      $this->LowCost = $LowCost;
      $this->Stops = $Stops;
    }

    /**
     * @return string
     */
    public function getCountryOfResidence()
    {
      return $this->CountryOfResidence;
    }

    /**
     * @param string $CountryOfResidence
     * @return JP_SearchSegmentFlight
     */
    public function setCountryOfResidence($CountryOfResidence)
    {
      $this->CountryOfResidence = $CountryOfResidence;
      return $this;
    }

    /**
     * @return ArrayOfJP_RouteDispo
     */
    public function getRoutes()
    {
      return $this->Routes;
    }

    /**
     * @param ArrayOfJP_RouteDispo $Routes
     * @return JP_SearchSegmentFlight
     */
    public function setRoutes($Routes)
    {
      $this->Routes = $Routes;
      return $this;
    }

    /**
     * @return JP_FlightDiscount
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param JP_FlightDiscount $Discount
     * @return JP_SearchSegmentFlight
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return ArrayOfJP_Airline
     */
    public function getAirlines()
    {
      return $this->Airlines;
    }

    /**
     * @param ArrayOfJP_Airline $Airlines
     * @return JP_SearchSegmentFlight
     */
    public function setAirlines($Airlines)
    {
      $this->Airlines = $Airlines;
      return $this;
    }

    /**
     * @return JP_CabinType
     */
    public function getCabin()
    {
      return $this->Cabin;
    }

    /**
     * @param JP_CabinType $Cabin
     * @return JP_SearchSegmentFlight
     */
    public function setCabin($Cabin)
    {
      $this->Cabin = $Cabin;
      return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param string $Class
     * @return JP_SearchSegmentFlight
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLowCost()
    {
      return $this->LowCost;
    }

    /**
     * @param boolean $LowCost
     * @return JP_SearchSegmentFlight
     */
    public function setLowCost($LowCost)
    {
      $this->LowCost = $LowCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getStops()
    {
      return $this->Stops;
    }

    /**
     * @param int $Stops
     * @return JP_SearchSegmentFlight
     */
    public function setStops($Stops)
    {
      $this->Stops = $Stops;
      return $this;
    }

}

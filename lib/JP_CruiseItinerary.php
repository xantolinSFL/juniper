<?php

class JP_CruiseItinerary
{

    /**
     * @var string $Sea
     */
    protected $Sea = null;

    /**
     * @var ArrayOfJP_CruiseStarDay $StarDays
     */
    protected $StarDays = null;

    /**
     * @var ArrayOfString1 $Images
     */
    protected $Images = null;

    /**
     * @var JP_Ship $Ship
     */
    protected $Ship = null;

    /**
     * @var ArrayOfJP_Day $Route
     */
    protected $Route = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $CruiseCode
     */
    protected $CruiseCode = null;

    /**
     * @param string $Code
     * @param string $CruiseCode
     */
    public function __construct($Code, $CruiseCode)
    {
      $this->Code = $Code;
      $this->CruiseCode = $CruiseCode;
    }

    /**
     * @return string
     */
    public function getSea()
    {
      return $this->Sea;
    }

    /**
     * @param string $Sea
     * @return JP_CruiseItinerary
     */
    public function setSea($Sea)
    {
      $this->Sea = $Sea;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruiseStarDay
     */
    public function getStarDays()
    {
      return $this->StarDays;
    }

    /**
     * @param ArrayOfJP_CruiseStarDay $StarDays
     * @return JP_CruiseItinerary
     */
    public function setStarDays($StarDays)
    {
      $this->StarDays = $StarDays;
      return $this;
    }

    /**
     * @return ArrayOfString1
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfString1 $Images
     * @return JP_CruiseItinerary
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return JP_Ship
     */
    public function getShip()
    {
      return $this->Ship;
    }

    /**
     * @param JP_Ship $Ship
     * @return JP_CruiseItinerary
     */
    public function setShip($Ship)
    {
      $this->Ship = $Ship;
      return $this;
    }

    /**
     * @return ArrayOfJP_Day
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param ArrayOfJP_Day $Route
     * @return JP_CruiseItinerary
     */
    public function setRoute($Route)
    {
      $this->Route = $Route;
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
     * @return JP_CruiseItinerary
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getCruiseCode()
    {
      return $this->CruiseCode;
    }

    /**
     * @param string $CruiseCode
     * @return JP_CruiseItinerary
     */
    public function setCruiseCode($CruiseCode)
    {
      $this->CruiseCode = $CruiseCode;
      return $this;
    }

}

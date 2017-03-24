<?php

class JP_SearchSegmentShip
{

    /**
     * @var string $CountryOfResidence
     */
    protected $CountryOfResidence = null;

    /**
     * @var string $ShipCode
     */
    protected $ShipCode = null;

    /**
     * @var int $Zone
     */
    protected $Zone = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @var JP_CruiseDuration $Duration
     */
    protected $Duration = null;

    /**
     * @var string $CruiseCode
     */
    protected $CruiseCode = null;

    /**
     * @param string $ShipCode
     * @param int $Zone
     * @param date $Start
     * @param date $End
     * @param JP_CruiseDuration $Duration
     * @param string $CruiseCode
     */
    public function __construct($ShipCode, $Zone, $Start, $End, $Duration, $CruiseCode)
    {
      $this->ShipCode = $ShipCode;
      $this->Zone = $Zone;
      $this->Start = $Start;
      $this->End = $End;
      $this->Duration = $Duration;
      $this->CruiseCode = $CruiseCode;
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
     * @return JP_SearchSegmentShip
     */
    public function setCountryOfResidence($CountryOfResidence)
    {
      $this->CountryOfResidence = $CountryOfResidence;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipCode()
    {
      return $this->ShipCode;
    }

    /**
     * @param string $ShipCode
     * @return JP_SearchSegmentShip
     */
    public function setShipCode($ShipCode)
    {
      $this->ShipCode = $ShipCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getZone()
    {
      return $this->Zone;
    }

    /**
     * @param int $Zone
     * @return JP_SearchSegmentShip
     */
    public function setZone($Zone)
    {
      $this->Zone = $Zone;
      return $this;
    }

    /**
     * @return date
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param date $Start
     * @return JP_SearchSegmentShip
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return JP_SearchSegmentShip
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return JP_CruiseDuration
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param JP_CruiseDuration $Duration
     * @return JP_SearchSegmentShip
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
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
     * @return JP_SearchSegmentShip
     */
    public function setCruiseCode($CruiseCode)
    {
      $this->CruiseCode = $CruiseCode;
      return $this;
    }

}

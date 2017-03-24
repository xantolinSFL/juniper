<?php

class JP_SearchPreSegmentCruise
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
     * @var boolean $IncludeFlight
     */
    protected $IncludeFlight = null;

    /**
     * @param string $ShipCode
     * @param int $Zone
     * @param date $Start
     * @param date $End
     * @param JP_CruiseDuration $Duration
     * @param boolean $IncludeFlight
     */
    public function __construct($ShipCode, $Zone, $Start, $End, $Duration, $IncludeFlight)
    {
      $this->ShipCode = $ShipCode;
      $this->Zone = $Zone;
      $this->Start = $Start;
      $this->End = $End;
      $this->Duration = $Duration;
      $this->IncludeFlight = $IncludeFlight;
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
     * @return JP_SearchPreSegmentCruise
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
     * @return JP_SearchPreSegmentCruise
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
     * @return JP_SearchPreSegmentCruise
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
     * @return JP_SearchPreSegmentCruise
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
     * @return JP_SearchPreSegmentCruise
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
     * @return JP_SearchPreSegmentCruise
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeFlight()
    {
      return $this->IncludeFlight;
    }

    /**
     * @param boolean $IncludeFlight
     * @return JP_SearchPreSegmentCruise
     */
    public function setIncludeFlight($IncludeFlight)
    {
      $this->IncludeFlight = $IncludeFlight;
      return $this;
    }

}

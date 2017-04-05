<?php

namespace Juniper\Webservice;

class JP_FlightInfoService
{

    /**
     * @var string $FlightDate
     */
    protected $FlightDate = null;

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var string $Airport
     */
    protected $Airport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFlightDate()
    {
      return $this->FlightDate;
    }

    /**
     * @param string $FlightDate
     * @return JP_FlightInfoService
     */
    public function setFlightDate($FlightDate)
    {
      $this->FlightDate = $FlightDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param string $Time
     * @return JP_FlightInfoService
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return JP_FlightInfoService
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return string
     */
    public function getAirport()
    {
      return $this->Airport;
    }

    /**
     * @param string $Airport
     * @return JP_FlightInfoService
     */
    public function setAirport($Airport)
    {
      $this->Airport = $Airport;
      return $this;
    }

}

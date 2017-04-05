<?php

namespace Juniper\Webservice;

class JP_FlightInfo
{

    /**
     * @var string $Airport
     */
    protected $Airport = null;

    /**
     * @var \DateTime $FlightTime
     */
    protected $FlightTime = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @param string $Airport
     * @param \DateTime $FlightTime
     * @param string $FlightNumber
     */
    public function __construct($Airport, \DateTime $FlightTime, $FlightNumber)
    {
      $this->Airport = $Airport;
      $this->FlightTime = $FlightTime->format(\DateTime::ATOM);
      $this->FlightNumber = $FlightNumber;
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
     * @return JP_FlightInfo
     */
    public function setAirport($Airport)
    {
      $this->Airport = $Airport;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFlightTime()
    {
      if ($this->FlightTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FlightTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FlightTime
     * @return JP_FlightInfo
     */
    public function setFlightTime(\DateTime $FlightTime)
    {
      $this->FlightTime = $FlightTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param string $FlightNumber
     * @return JP_FlightInfo
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

}

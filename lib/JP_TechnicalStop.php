<?php

namespace Juniper\Webservice;

class JP_TechnicalStop
{

    /**
     * @var string $AirportCode
     */
    protected $AirportCode = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @param string $AirportCode
     * @param \DateTime $ArrivalDate
     * @param \DateTime $DepartureDate
     */
    public function __construct($AirportCode, \DateTime $ArrivalDate, \DateTime $DepartureDate)
    {
      $this->AirportCode = $AirportCode;
      $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
      $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getAirportCode()
    {
      return $this->AirportCode;
    }

    /**
     * @param string $AirportCode
     * @return JP_TechnicalStop
     */
    public function setAirportCode($AirportCode)
    {
      $this->AirportCode = $AirportCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
      if ($this->ArrivalDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArrivalDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArrivalDate
     * @return JP_TechnicalStop
     */
    public function setArrivalDate(\DateTime $ArrivalDate)
    {
      $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
      if ($this->DepartureDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DepartureDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return JP_TechnicalStop
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
      $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
      return $this;
    }

}

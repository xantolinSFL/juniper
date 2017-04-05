<?php

namespace Juniper\Webservice;

class JP_CruiseSegment
{

    /**
     * @var string $DepartureAirportName
     */
    protected $DepartureAirportName = null;

    /**
     * @var string $ArrivalAirportName
     */
    protected $ArrivalAirportName = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @var string $DepartureAirport
     */
    protected $DepartureAirport = null;

    /**
     * @var string $ArrivalAirport
     */
    protected $ArrivalAirport = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var string $OperatingAirline
     */
    protected $OperatingAirline = null;

    /**
     * @var string $MarquetingAirline
     */
    protected $MarquetingAirline = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @param int $Order
     * @param string $DepartureAirport
     * @param string $ArrivalAirport
     * @param \DateTime $DepartureDate
     * @param \DateTime $ArrivalDate
     * @param string $OperatingAirline
     * @param string $MarquetingAirline
     * @param string $FlightNumber
     */
    public function __construct($Order, $DepartureAirport, $ArrivalAirport, \DateTime $DepartureDate, \DateTime $ArrivalDate, $OperatingAirline, $MarquetingAirline, $FlightNumber)
    {
      $this->Order = $Order;
      $this->DepartureAirport = $DepartureAirport;
      $this->ArrivalAirport = $ArrivalAirport;
      $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
      $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
      $this->OperatingAirline = $OperatingAirline;
      $this->MarquetingAirline = $MarquetingAirline;
      $this->FlightNumber = $FlightNumber;
    }

    /**
     * @return string
     */
    public function getDepartureAirportName()
    {
      return $this->DepartureAirportName;
    }

    /**
     * @param string $DepartureAirportName
     * @return JP_CruiseSegment
     */
    public function setDepartureAirportName($DepartureAirportName)
    {
      $this->DepartureAirportName = $DepartureAirportName;
      return $this;
    }

    /**
     * @return string
     */
    public function getArrivalAirportName()
    {
      return $this->ArrivalAirportName;
    }

    /**
     * @param string $ArrivalAirportName
     * @return JP_CruiseSegment
     */
    public function setArrivalAirportName($ArrivalAirportName)
    {
      $this->ArrivalAirportName = $ArrivalAirportName;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param int $Order
     * @return JP_CruiseSegment
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartureAirport()
    {
      return $this->DepartureAirport;
    }

    /**
     * @param string $DepartureAirport
     * @return JP_CruiseSegment
     */
    public function setDepartureAirport($DepartureAirport)
    {
      $this->DepartureAirport = $DepartureAirport;
      return $this;
    }

    /**
     * @return string
     */
    public function getArrivalAirport()
    {
      return $this->ArrivalAirport;
    }

    /**
     * @param string $ArrivalAirport
     * @return JP_CruiseSegment
     */
    public function setArrivalAirport($ArrivalAirport)
    {
      $this->ArrivalAirport = $ArrivalAirport;
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
     * @return JP_CruiseSegment
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
      $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
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
     * @return JP_CruiseSegment
     */
    public function setArrivalDate(\DateTime $ArrivalDate)
    {
      $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatingAirline()
    {
      return $this->OperatingAirline;
    }

    /**
     * @param string $OperatingAirline
     * @return JP_CruiseSegment
     */
    public function setOperatingAirline($OperatingAirline)
    {
      $this->OperatingAirline = $OperatingAirline;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarquetingAirline()
    {
      return $this->MarquetingAirline;
    }

    /**
     * @param string $MarquetingAirline
     * @return JP_CruiseSegment
     */
    public function setMarquetingAirline($MarquetingAirline)
    {
      $this->MarquetingAirline = $MarquetingAirline;
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
     * @return JP_CruiseSegment
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

}

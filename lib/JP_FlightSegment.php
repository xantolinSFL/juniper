<?php

class JP_FlightSegment
{

    /**
     * @var ArrayOfJP_Equipment $Equipments
     */
    protected $Equipments = null;

    /**
     * @var ArrayOfJP_TechnicalStop $TechnicalStops
     */
    protected $TechnicalStops = null;

    /**
     * @var JP_SeatingMap $SeatingMap
     */
    protected $SeatingMap = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @var int $Stops
     */
    protected $Stops = null;

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
     * @var duration $JourneyDuration
     */
    protected $JourneyDuration = null;

    /**
     * @var duration $GroundDuration
     */
    protected $GroundDuration = null;

    /**
     * @var string $Class
     */
    protected $Class = null;

    /**
     * @var string $Meal
     */
    protected $Meal = null;

    /**
     * @var string $Cabin
     */
    protected $Cabin = null;

    /**
     * @var string $AirplaneType
     */
    protected $AirplaneType = null;

    /**
     * @var string $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @var string $VendorLocator
     */
    protected $VendorLocator = null;

    /**
     * @param int $Order
     * @param int $Stops
     * @param string $DepartureAirport
     * @param string $ArrivalAirport
     * @param \DateTime $DepartureDate
     * @param \DateTime $ArrivalDate
     * @param string $OperatingAirline
     * @param string $MarquetingAirline
     * @param string $FlightNumber
     * @param duration $JourneyDuration
     * @param duration $GroundDuration
     * @param string $Class
     * @param string $Meal
     * @param string $Cabin
     * @param string $AirplaneType
     * @param string $FareBasis
     * @param string $VendorLocator
     */
    public function __construct($Order, $Stops, $DepartureAirport, $ArrivalAirport, \DateTime $DepartureDate, \DateTime $ArrivalDate, $OperatingAirline, $MarquetingAirline, $FlightNumber, $JourneyDuration, $GroundDuration, $Class, $Meal, $Cabin, $AirplaneType, $FareBasis, $VendorLocator)
    {
      $this->Order = $Order;
      $this->Stops = $Stops;
      $this->DepartureAirport = $DepartureAirport;
      $this->ArrivalAirport = $ArrivalAirport;
      $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
      $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
      $this->OperatingAirline = $OperatingAirline;
      $this->MarquetingAirline = $MarquetingAirline;
      $this->FlightNumber = $FlightNumber;
      $this->JourneyDuration = $JourneyDuration;
      $this->GroundDuration = $GroundDuration;
      $this->Class = $Class;
      $this->Meal = $Meal;
      $this->Cabin = $Cabin;
      $this->AirplaneType = $AirplaneType;
      $this->FareBasis = $FareBasis;
      $this->VendorLocator = $VendorLocator;
    }

    /**
     * @return ArrayOfJP_Equipment
     */
    public function getEquipments()
    {
      return $this->Equipments;
    }

    /**
     * @param ArrayOfJP_Equipment $Equipments
     * @return JP_FlightSegment
     */
    public function setEquipments($Equipments)
    {
      $this->Equipments = $Equipments;
      return $this;
    }

    /**
     * @return ArrayOfJP_TechnicalStop
     */
    public function getTechnicalStops()
    {
      return $this->TechnicalStops;
    }

    /**
     * @param ArrayOfJP_TechnicalStop $TechnicalStops
     * @return JP_FlightSegment
     */
    public function setTechnicalStops($TechnicalStops)
    {
      $this->TechnicalStops = $TechnicalStops;
      return $this;
    }

    /**
     * @return JP_SeatingMap
     */
    public function getSeatingMap()
    {
      return $this->SeatingMap;
    }

    /**
     * @param JP_SeatingMap $SeatingMap
     * @return JP_FlightSegment
     */
    public function setSeatingMap($SeatingMap)
    {
      $this->SeatingMap = $SeatingMap;
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
     * @return JP_FlightSegment
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
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
     * @return JP_FlightSegment
     */
    public function setStops($Stops)
    {
      $this->Stops = $Stops;
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
     * @return JP_FlightSegment
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
     * @return JP_FlightSegment
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
     * @return JP_FlightSegment
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
     * @return JP_FlightSegment
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
     * @return JP_FlightSegment
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
     * @return JP_FlightSegment
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
     * @return JP_FlightSegment
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return duration
     */
    public function getJourneyDuration()
    {
      return $this->JourneyDuration;
    }

    /**
     * @param duration $JourneyDuration
     * @return JP_FlightSegment
     */
    public function setJourneyDuration($JourneyDuration)
    {
      $this->JourneyDuration = $JourneyDuration;
      return $this;
    }

    /**
     * @return duration
     */
    public function getGroundDuration()
    {
      return $this->GroundDuration;
    }

    /**
     * @param duration $GroundDuration
     * @return JP_FlightSegment
     */
    public function setGroundDuration($GroundDuration)
    {
      $this->GroundDuration = $GroundDuration;
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
     * @return JP_FlightSegment
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

    /**
     * @return string
     */
    public function getMeal()
    {
      return $this->Meal;
    }

    /**
     * @param string $Meal
     * @return JP_FlightSegment
     */
    public function setMeal($Meal)
    {
      $this->Meal = $Meal;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabin()
    {
      return $this->Cabin;
    }

    /**
     * @param string $Cabin
     * @return JP_FlightSegment
     */
    public function setCabin($Cabin)
    {
      $this->Cabin = $Cabin;
      return $this;
    }

    /**
     * @return string
     */
    public function getAirplaneType()
    {
      return $this->AirplaneType;
    }

    /**
     * @param string $AirplaneType
     * @return JP_FlightSegment
     */
    public function setAirplaneType($AirplaneType)
    {
      $this->AirplaneType = $AirplaneType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param string $FareBasis
     * @return JP_FlightSegment
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorLocator()
    {
      return $this->VendorLocator;
    }

    /**
     * @param string $VendorLocator
     * @return JP_FlightSegment
     */
    public function setVendorLocator($VendorLocator)
    {
      $this->VendorLocator = $VendorLocator;
      return $this;
    }

}

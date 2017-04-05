<?php

namespace Juniper\Webservice;

class JP_PackageStay
{

    /**
     * @var ArrayOfJP_PackageHotel $Hotels
     */
    protected $Hotels = null;

    /**
     * @var ArrayOfJP_Flight $Flights
     */
    protected $Flights = null;

    /**
     * @var ArrayOfJP_Transfer $Transfers
     */
    protected $Transfers = null;

    /**
     * @var ArrayOfJP_ServiceProduct $Services
     */
    protected $Services = null;

    /**
     * @var ArrayOfJP_PackageInsurance $Insurances
     */
    protected $Insurances = null;

    /**
     * @var ArrayOfJP_Tour $Packages
     */
    protected $Packages = null;

    /**
     * @var ArrayOfJP_Car $Rentacars
     */
    protected $Rentacars = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var int $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @param string $Code
     * @param int $DestinationZone
     * @param date $Start
     * @param date $End
     */
    public function __construct($Code, $DestinationZone, $Start, $End)
    {
      $this->Code = $Code;
      $this->DestinationZone = $DestinationZone;
      $this->Start = $Start;
      $this->End = $End;
    }

    /**
     * @return ArrayOfJP_PackageHotel
     */
    public function getHotels()
    {
      return $this->Hotels;
    }

    /**
     * @param ArrayOfJP_PackageHotel $Hotels
     * @return JP_PackageStay
     */
    public function setHotels($Hotels)
    {
      $this->Hotels = $Hotels;
      return $this;
    }

    /**
     * @return ArrayOfJP_Flight
     */
    public function getFlights()
    {
      return $this->Flights;
    }

    /**
     * @param ArrayOfJP_Flight $Flights
     * @return JP_PackageStay
     */
    public function setFlights($Flights)
    {
      $this->Flights = $Flights;
      return $this;
    }

    /**
     * @return ArrayOfJP_Transfer
     */
    public function getTransfers()
    {
      return $this->Transfers;
    }

    /**
     * @param ArrayOfJP_Transfer $Transfers
     * @return JP_PackageStay
     */
    public function setTransfers($Transfers)
    {
      $this->Transfers = $Transfers;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceProduct
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param ArrayOfJP_ServiceProduct $Services
     * @return JP_PackageStay
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageInsurance
     */
    public function getInsurances()
    {
      return $this->Insurances;
    }

    /**
     * @param ArrayOfJP_PackageInsurance $Insurances
     * @return JP_PackageStay
     */
    public function setInsurances($Insurances)
    {
      $this->Insurances = $Insurances;
      return $this;
    }

    /**
     * @return ArrayOfJP_Tour
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param ArrayOfJP_Tour $Packages
     * @return JP_PackageStay
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

    /**
     * @return ArrayOfJP_Car
     */
    public function getRentacars()
    {
      return $this->Rentacars;
    }

    /**
     * @param ArrayOfJP_Car $Rentacars
     * @return JP_PackageStay
     */
    public function setRentacars($Rentacars)
    {
      $this->Rentacars = $Rentacars;
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
     * @return JP_PackageStay
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getDestinationZone()
    {
      return $this->DestinationZone;
    }

    /**
     * @param int $DestinationZone
     * @return JP_PackageStay
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
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
     * @return JP_PackageStay
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
     * @return JP_PackageStay
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

}

<?php

class JP_CruiseComponent
{

    /**
     * @var ArrayOfJP_CruiseStation $Stations
     */
    protected $Stations = null;

    /**
     * @var ArrayOfJP_CruiseFlight $Flights
     */
    protected $Flights = null;

    /**
     * @var ComponentsType $Type
     */
    protected $Type = null;

    /**
     * @var boolean $Mandatory
     */
    protected $Mandatory = null;

    /**
     * @param ComponentsType $Type
     * @param boolean $Mandatory
     */
    public function __construct($Type, $Mandatory)
    {
      $this->Type = $Type;
      $this->Mandatory = $Mandatory;
    }

    /**
     * @return ArrayOfJP_CruiseStation
     */
    public function getStations()
    {
      return $this->Stations;
    }

    /**
     * @param ArrayOfJP_CruiseStation $Stations
     * @return JP_CruiseComponent
     */
    public function setStations($Stations)
    {
      $this->Stations = $Stations;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruiseFlight
     */
    public function getFlights()
    {
      return $this->Flights;
    }

    /**
     * @param ArrayOfJP_CruiseFlight $Flights
     * @return JP_CruiseComponent
     */
    public function setFlights($Flights)
    {
      $this->Flights = $Flights;
      return $this;
    }

    /**
     * @return ComponentsType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ComponentsType $Type
     * @return JP_CruiseComponent
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMandatory()
    {
      return $this->Mandatory;
    }

    /**
     * @param boolean $Mandatory
     * @return JP_CruiseComponent
     */
    public function setMandatory($Mandatory)
    {
      $this->Mandatory = $Mandatory;
      return $this;
    }

}

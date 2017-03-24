<?php

class JP_TransferBookingInfo
{

    /**
     * @var JP_TransferOrigin $Origin
     */
    protected $Origin = null;

    /**
     * @var JP_TransferDestination $Destination
     */
    protected $Destination = null;

    /**
     * @var JP_HotelService $HotelService
     */
    protected $HotelService = null;

    /**
     * @var string $ICode
     */
    protected $ICode = null;

    /**
     * @var JP_RouteType $Route
     */
    protected $Route = null;

    /**
     * @param string $ICode
     * @param JP_RouteType $Route
     */
    public function __construct($ICode, $Route)
    {
      $this->ICode = $ICode;
      $this->Route = $Route;
    }

    /**
     * @return JP_TransferOrigin
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param JP_TransferOrigin $Origin
     * @return JP_TransferBookingInfo
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return JP_TransferDestination
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param JP_TransferDestination $Destination
     * @return JP_TransferBookingInfo
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return JP_HotelService
     */
    public function getHotelService()
    {
      return $this->HotelService;
    }

    /**
     * @param JP_HotelService $HotelService
     * @return JP_TransferBookingInfo
     */
    public function setHotelService($HotelService)
    {
      $this->HotelService = $HotelService;
      return $this;
    }

    /**
     * @return string
     */
    public function getICode()
    {
      return $this->ICode;
    }

    /**
     * @param string $ICode
     * @return JP_TransferBookingInfo
     */
    public function setICode($ICode)
    {
      $this->ICode = $ICode;
      return $this;
    }

    /**
     * @return JP_RouteType
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param JP_RouteType $Route
     * @return JP_TransferBookingInfo
     */
    public function setRoute($Route)
    {
      $this->Route = $Route;
      return $this;
    }

}

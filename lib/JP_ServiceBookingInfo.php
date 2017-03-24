<?php

class JP_ServiceBookingInfo
{

    /**
     * @var JP_MeetingPointInfo $MeetingPointInfo
     */
    protected $MeetingPointInfo = null;

    /**
     * @var string $GroundHandlingComments
     */
    protected $GroundHandlingComments = null;

    /**
     * @var JP_HotelService $HotelService
     */
    protected $HotelService = null;

    /**
     * @var JP_FlightInfoService $FlightInfoOrigin
     */
    protected $FlightInfoOrigin = null;

    /**
     * @var JP_FlightInfoService $FlightInfoDestination
     */
    protected $FlightInfoDestination = null;

    /**
     * @var string $ICode
     */
    protected $ICode = null;

    /**
     * @param string $ICode
     */
    public function __construct($ICode)
    {
      $this->ICode = $ICode;
    }

    /**
     * @return JP_MeetingPointInfo
     */
    public function getMeetingPointInfo()
    {
      return $this->MeetingPointInfo;
    }

    /**
     * @param JP_MeetingPointInfo $MeetingPointInfo
     * @return JP_ServiceBookingInfo
     */
    public function setMeetingPointInfo($MeetingPointInfo)
    {
      $this->MeetingPointInfo = $MeetingPointInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroundHandlingComments()
    {
      return $this->GroundHandlingComments;
    }

    /**
     * @param string $GroundHandlingComments
     * @return JP_ServiceBookingInfo
     */
    public function setGroundHandlingComments($GroundHandlingComments)
    {
      $this->GroundHandlingComments = $GroundHandlingComments;
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
     * @return JP_ServiceBookingInfo
     */
    public function setHotelService($HotelService)
    {
      $this->HotelService = $HotelService;
      return $this;
    }

    /**
     * @return JP_FlightInfoService
     */
    public function getFlightInfoOrigin()
    {
      return $this->FlightInfoOrigin;
    }

    /**
     * @param JP_FlightInfoService $FlightInfoOrigin
     * @return JP_ServiceBookingInfo
     */
    public function setFlightInfoOrigin($FlightInfoOrigin)
    {
      $this->FlightInfoOrigin = $FlightInfoOrigin;
      return $this;
    }

    /**
     * @return JP_FlightInfoService
     */
    public function getFlightInfoDestination()
    {
      return $this->FlightInfoDestination;
    }

    /**
     * @param JP_FlightInfoService $FlightInfoDestination
     * @return JP_ServiceBookingInfo
     */
    public function setFlightInfoDestination($FlightInfoDestination)
    {
      $this->FlightInfoDestination = $FlightInfoDestination;
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
     * @return JP_ServiceBookingInfo
     */
    public function setICode($ICode)
    {
      $this->ICode = $ICode;
      return $this;
    }

}

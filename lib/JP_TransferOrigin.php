<?php

class JP_TransferOrigin
{

    /**
     * @var JP_MeetingPointInfo $MeetingPointInfo
     */
    protected $MeetingPointInfo = null;

    /**
     * @var JP_FlightInfo $FlightInfo
     */
    protected $FlightInfo = null;

    /**
     * @var JP_ShipInfo $ShipInfo
     */
    protected $ShipInfo = null;

    /**
     * @var JP_TrainInfo $TrainInfo
     */
    protected $TrainInfo = null;

    /**
     * @var string $TerminalArrival
     */
    protected $TerminalArrival = null;

    /**
     * @var string $TerminalDeparture
     */
    protected $TerminalDeparture = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var JP_ZoneType $Type
     */
    protected $Type = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var time $MeetingTime
     */
    protected $MeetingTime = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @param string $Code
     * @param JP_ZoneType $Type
     * @param date $Start
     * @param time $MeetingTime
     * @param string $HotelCode
     */
    public function __construct($Code, $Type, $Start, $MeetingTime, $HotelCode)
    {
      $this->Code = $Code;
      $this->Type = $Type;
      $this->Start = $Start;
      $this->MeetingTime = $MeetingTime;
      $this->HotelCode = $HotelCode;
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
     * @return JP_TransferOrigin
     */
    public function setMeetingPointInfo($MeetingPointInfo)
    {
      $this->MeetingPointInfo = $MeetingPointInfo;
      return $this;
    }

    /**
     * @return JP_FlightInfo
     */
    public function getFlightInfo()
    {
      return $this->FlightInfo;
    }

    /**
     * @param JP_FlightInfo $FlightInfo
     * @return JP_TransferOrigin
     */
    public function setFlightInfo($FlightInfo)
    {
      $this->FlightInfo = $FlightInfo;
      return $this;
    }

    /**
     * @return JP_ShipInfo
     */
    public function getShipInfo()
    {
      return $this->ShipInfo;
    }

    /**
     * @param JP_ShipInfo $ShipInfo
     * @return JP_TransferOrigin
     */
    public function setShipInfo($ShipInfo)
    {
      $this->ShipInfo = $ShipInfo;
      return $this;
    }

    /**
     * @return JP_TrainInfo
     */
    public function getTrainInfo()
    {
      return $this->TrainInfo;
    }

    /**
     * @param JP_TrainInfo $TrainInfo
     * @return JP_TransferOrigin
     */
    public function setTrainInfo($TrainInfo)
    {
      $this->TrainInfo = $TrainInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminalArrival()
    {
      return $this->TerminalArrival;
    }

    /**
     * @param string $TerminalArrival
     * @return JP_TransferOrigin
     */
    public function setTerminalArrival($TerminalArrival)
    {
      $this->TerminalArrival = $TerminalArrival;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminalDeparture()
    {
      return $this->TerminalDeparture;
    }

    /**
     * @param string $TerminalDeparture
     * @return JP_TransferOrigin
     */
    public function setTerminalDeparture($TerminalDeparture)
    {
      $this->TerminalDeparture = $TerminalDeparture;
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
     * @return JP_TransferOrigin
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return JP_ZoneType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JP_ZoneType $Type
     * @return JP_TransferOrigin
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return JP_TransferOrigin
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return time
     */
    public function getMeetingTime()
    {
      return $this->MeetingTime;
    }

    /**
     * @param time $MeetingTime
     * @return JP_TransferOrigin
     */
    public function setMeetingTime($MeetingTime)
    {
      $this->MeetingTime = $MeetingTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return JP_TransferOrigin
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

}

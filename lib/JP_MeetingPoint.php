<?php

class JP_MeetingPoint
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @var string $DestinationCode
     */
    protected $DestinationCode = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var string $Longitude
     */
    protected $Longitude = null;

    /**
     * @param string $Code
     * @param string $Time
     * @param string $DestinationCode
     * @param string $Address
     * @param string $Latitude
     * @param string $Longitude
     */
    public function __construct($Code, $Time, $DestinationCode, $Address, $Latitude, $Longitude)
    {
      $this->Code = $Code;
      $this->Time = $Time;
      $this->DestinationCode = $DestinationCode;
      $this->Address = $Address;
      $this->Latitude = $Latitude;
      $this->Longitude = $Longitude;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_MeetingPoint
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return JP_MeetingPoint
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return JP_MeetingPoint
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationCode()
    {
      return $this->DestinationCode;
    }

    /**
     * @param string $DestinationCode
     * @return JP_MeetingPoint
     */
    public function setDestinationCode($DestinationCode)
    {
      $this->DestinationCode = $DestinationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return JP_MeetingPoint
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return JP_MeetingPoint
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return JP_MeetingPoint
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

}

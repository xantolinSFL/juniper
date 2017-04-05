<?php

namespace Juniper\Webservice;

class JPSOAP_HotelAvailReleases
{

    /**
     * @var JPSOAP_HotelAvailRelease[] $Release
     */
    protected $Release = null;

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @var string $TimeZone
     */
    protected $TimeZone = null;

    /**
     * @param string $Time
     * @param string $TimeZone
     */
    public function __construct($Time, $TimeZone)
    {
      $this->Time = $Time;
      $this->TimeZone = $TimeZone;
    }

    /**
     * @return JPSOAP_HotelAvailRelease[]
     */
    public function getRelease()
    {
      return $this->Release;
    }

    /**
     * @param JPSOAP_HotelAvailRelease[] $Release
     * @return JPSOAP_HotelAvailReleases
     */
    public function setRelease(array $Release = null)
    {
      $this->Release = $Release;
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
     * @return JPSOAP_HotelAvailReleases
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
      return $this->TimeZone;
    }

    /**
     * @param string $TimeZone
     * @return JPSOAP_HotelAvailReleases
     */
    public function setTimeZone($TimeZone)
    {
      $this->TimeZone = $TimeZone;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JP_HotelBookingInfo
{

    /**
     * @var JP_BookingPrice $Price
     */
    protected $Price = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @var JP_PackageContracts $PackageContracts
     */
    protected $PackageContracts = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var ArrayOfJP_HotelPreference $Preferences
     */
    protected $Preferences = null;

    /**
     * @var string $Start
     */
    protected $Start = null;

    /**
     * @var string $End
     */
    protected $End = null;

    /**
     * @param string $Start
     * @param string $End
     */
    public function __construct($Start, $End)
    {
      $this->Start = $Start;
      $this->End = $End;
    }

    /**
     * @return JP_BookingPrice
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param JP_BookingPrice $Price
     * @return JP_HotelBookingInfo
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return JP_AvailStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param JP_AvailStatus $Status
     * @return JP_HotelBookingInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return JP_PackageContracts
     */
    public function getPackageContracts()
    {
      return $this->PackageContracts;
    }

    /**
     * @param JP_PackageContracts $PackageContracts
     * @return JP_HotelBookingInfo
     */
    public function setPackageContracts($PackageContracts)
    {
      $this->PackageContracts = $PackageContracts;
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
     * @return JP_HotelBookingInfo
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelPreference
     */
    public function getPreferences()
    {
      return $this->Preferences;
    }

    /**
     * @param ArrayOfJP_HotelPreference $Preferences
     * @return JP_HotelBookingInfo
     */
    public function setPreferences($Preferences)
    {
      $this->Preferences = $Preferences;
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
     * @return JP_HotelBookingInfo
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
     * @return JP_HotelBookingInfo
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

}

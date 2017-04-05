<?php

namespace Juniper\Webservice;

class JPSOAP_HotelAvailRelease
{

    /**
     * @var ArrayOfJPSOAP_IntCodeAttr2 $RoomTypes
     */
    protected $RoomTypes = null;

    /**
     * @var ArrayOfJPSOAP_DateIntervals $Dates
     */
    protected $Dates = null;

    /**
     * @var int $Days
     */
    protected $Days = null;

    /**
     * @var JPSOAP_ReleaseTypes $Type
     */
    protected $Type = null;

    /**
     * @var int $Value
     */
    protected $Value = null;

    /**
     * @var boolean $AffectsBaseAllotment
     */
    protected $AffectsBaseAllotment = null;

    /**
     * @var boolean $AffectsSecurityAllotment
     */
    protected $AffectsSecurityAllotment = null;

    /**
     * @var boolean $AffectsGuaranteedAllotment
     */
    protected $AffectsGuaranteedAllotment = null;

    /**
     * @param int $Days
     * @param JPSOAP_ReleaseTypes $Type
     * @param int $Value
     * @param boolean $AffectsBaseAllotment
     * @param boolean $AffectsSecurityAllotment
     * @param boolean $AffectsGuaranteedAllotment
     */
    public function __construct($Days, $Type, $Value, $AffectsBaseAllotment, $AffectsSecurityAllotment, $AffectsGuaranteedAllotment)
    {
      $this->Days = $Days;
      $this->Type = $Type;
      $this->Value = $Value;
      $this->AffectsBaseAllotment = $AffectsBaseAllotment;
      $this->AffectsSecurityAllotment = $AffectsSecurityAllotment;
      $this->AffectsGuaranteedAllotment = $AffectsGuaranteedAllotment;
    }

    /**
     * @return ArrayOfJPSOAP_IntCodeAttr2
     */
    public function getRoomTypes()
    {
      return $this->RoomTypes;
    }

    /**
     * @param ArrayOfJPSOAP_IntCodeAttr2 $RoomTypes
     * @return JPSOAP_HotelAvailRelease
     */
    public function setRoomTypes($RoomTypes)
    {
      $this->RoomTypes = $RoomTypes;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_DateIntervals
     */
    public function getDates()
    {
      return $this->Dates;
    }

    /**
     * @param ArrayOfJPSOAP_DateIntervals $Dates
     * @return JPSOAP_HotelAvailRelease
     */
    public function setDates($Dates)
    {
      $this->Dates = $Dates;
      return $this;
    }

    /**
     * @return int
     */
    public function getDays()
    {
      return $this->Days;
    }

    /**
     * @param int $Days
     * @return JPSOAP_HotelAvailRelease
     */
    public function setDays($Days)
    {
      $this->Days = $Days;
      return $this;
    }

    /**
     * @return JPSOAP_ReleaseTypes
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JPSOAP_ReleaseTypes $Type
     * @return JPSOAP_HotelAvailRelease
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param int $Value
     * @return JPSOAP_HotelAvailRelease
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAffectsBaseAllotment()
    {
      return $this->AffectsBaseAllotment;
    }

    /**
     * @param boolean $AffectsBaseAllotment
     * @return JPSOAP_HotelAvailRelease
     */
    public function setAffectsBaseAllotment($AffectsBaseAllotment)
    {
      $this->AffectsBaseAllotment = $AffectsBaseAllotment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAffectsSecurityAllotment()
    {
      return $this->AffectsSecurityAllotment;
    }

    /**
     * @param boolean $AffectsSecurityAllotment
     * @return JPSOAP_HotelAvailRelease
     */
    public function setAffectsSecurityAllotment($AffectsSecurityAllotment)
    {
      $this->AffectsSecurityAllotment = $AffectsSecurityAllotment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAffectsGuaranteedAllotment()
    {
      return $this->AffectsGuaranteedAllotment;
    }

    /**
     * @param boolean $AffectsGuaranteedAllotment
     * @return JPSOAP_HotelAvailRelease
     */
    public function setAffectsGuaranteedAllotment($AffectsGuaranteedAllotment)
    {
      $this->AffectsGuaranteedAllotment = $AffectsGuaranteedAllotment;
      return $this;
    }

}

<?php

class JPSOAP_HotelAvailAllotment extends JPSOAP_Allotment
{

    /**
     * @var int $RoomTypeCode
     */
    protected $RoomTypeCode = null;

    /**
     * @var boolean $IsSecurityAllotment
     */
    protected $IsSecurityAllotment = null;

    /**
     * @var boolean $IsGuaranteedAllotment
     */
    protected $IsGuaranteedAllotment = null;

    /**
     * @var int $MinimumAllotment
     */
    protected $MinimumAllotment = null;

    /**
     * @param date $From
     * @param date $To
     * @param int $Available
     * @param int $RoomTypeCode
     * @param boolean $IsSecurityAllotment
     * @param boolean $IsGuaranteedAllotment
     * @param int $MinimumAllotment
     */
    public function __construct($From, $To, $Available, $RoomTypeCode, $IsSecurityAllotment, $IsGuaranteedAllotment, $MinimumAllotment)
    {
      parent::__construct($From, $To, $Available);
      $this->RoomTypeCode = $RoomTypeCode;
      $this->IsSecurityAllotment = $IsSecurityAllotment;
      $this->IsGuaranteedAllotment = $IsGuaranteedAllotment;
      $this->MinimumAllotment = $MinimumAllotment;
    }

    /**
     * @return int
     */
    public function getRoomTypeCode()
    {
      return $this->RoomTypeCode;
    }

    /**
     * @param int $RoomTypeCode
     * @return JPSOAP_HotelAvailAllotment
     */
    public function setRoomTypeCode($RoomTypeCode)
    {
      $this->RoomTypeCode = $RoomTypeCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSecurityAllotment()
    {
      return $this->IsSecurityAllotment;
    }

    /**
     * @param boolean $IsSecurityAllotment
     * @return JPSOAP_HotelAvailAllotment
     */
    public function setIsSecurityAllotment($IsSecurityAllotment)
    {
      $this->IsSecurityAllotment = $IsSecurityAllotment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGuaranteedAllotment()
    {
      return $this->IsGuaranteedAllotment;
    }

    /**
     * @param boolean $IsGuaranteedAllotment
     * @return JPSOAP_HotelAvailAllotment
     */
    public function setIsGuaranteedAllotment($IsGuaranteedAllotment)
    {
      $this->IsGuaranteedAllotment = $IsGuaranteedAllotment;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumAllotment()
    {
      return $this->MinimumAllotment;
    }

    /**
     * @param int $MinimumAllotment
     * @return JPSOAP_HotelAvailAllotment
     */
    public function setMinimumAllotment($MinimumAllotment)
    {
      $this->MinimumAllotment = $MinimumAllotment;
      return $this;
    }

}

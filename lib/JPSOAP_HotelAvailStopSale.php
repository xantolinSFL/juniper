<?php

class JPSOAP_HotelAvailStopSale
{

    /**
     * @var int $RoomTypeCode
     */
    protected $RoomTypeCode = null;

    /**
     * @var date $From
     */
    protected $From = null;

    /**
     * @var date $To
     */
    protected $To = null;

    /**
     * @var boolean $OnRequest
     */
    protected $OnRequest = null;

    /**
     * @var boolean $ApplyToCheckInDate
     */
    protected $ApplyToCheckInDate = null;

    /**
     * @param int $RoomTypeCode
     * @param date $From
     * @param date $To
     * @param boolean $OnRequest
     * @param boolean $ApplyToCheckInDate
     */
    public function __construct($RoomTypeCode, $From, $To, $OnRequest, $ApplyToCheckInDate)
    {
      $this->RoomTypeCode = $RoomTypeCode;
      $this->From = $From;
      $this->To = $To;
      $this->OnRequest = $OnRequest;
      $this->ApplyToCheckInDate = $ApplyToCheckInDate;
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
     * @return JPSOAP_HotelAvailStopSale
     */
    public function setRoomTypeCode($RoomTypeCode)
    {
      $this->RoomTypeCode = $RoomTypeCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param date $From
     * @return JPSOAP_HotelAvailStopSale
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return date
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param date $To
     * @return JPSOAP_HotelAvailStopSale
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnRequest()
    {
      return $this->OnRequest;
    }

    /**
     * @param boolean $OnRequest
     * @return JPSOAP_HotelAvailStopSale
     */
    public function setOnRequest($OnRequest)
    {
      $this->OnRequest = $OnRequest;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyToCheckInDate()
    {
      return $this->ApplyToCheckInDate;
    }

    /**
     * @param boolean $ApplyToCheckInDate
     * @return JPSOAP_HotelAvailStopSale
     */
    public function setApplyToCheckInDate($ApplyToCheckInDate)
    {
      $this->ApplyToCheckInDate = $ApplyToCheckInDate;
      return $this;
    }

}

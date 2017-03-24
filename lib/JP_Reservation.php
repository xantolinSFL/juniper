<?php

class JP_Reservation
{

    /**
     * @var string $ExternalBookingReference
     */
    protected $ExternalBookingReference = null;

    /**
     * @var JP_Holder $Holder
     */
    protected $Holder = null;

    /**
     * @var JP_Paxes $Paxes
     */
    protected $Paxes = null;

    /**
     * @var ArrayOfJP_Comment $Comments
     */
    protected $Comments = null;

    /**
     * @var int $FinalCustomerCode
     */
    protected $FinalCustomerCode = null;

    /**
     * @var ArrayOfJP_AgencyData $AgenciesData
     */
    protected $AgenciesData = null;

    /**
     * @var JP_Items $Items
     */
    protected $Items = null;

    /**
     * @var int $ReservationCode
     */
    protected $ReservationCode = null;

    /**
     * @var string $Locator
     */
    protected $Locator = null;

    /**
     * @var string $BookingChannel
     */
    protected $BookingChannel = null;

    /**
     * @var JP_ResStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @param int $ReservationCode
     * @param string $Locator
     * @param string $BookingChannel
     * @param JP_ResStatus $Status
     * @param string $Language
     */
    public function __construct($ReservationCode, $Locator, $BookingChannel, $Status, $Language)
    {
      $this->ReservationCode = $ReservationCode;
      $this->Locator = $Locator;
      $this->BookingChannel = $BookingChannel;
      $this->Status = $Status;
      $this->Language = $Language;
    }

    /**
     * @return string
     */
    public function getExternalBookingReference()
    {
      return $this->ExternalBookingReference;
    }

    /**
     * @param string $ExternalBookingReference
     * @return JP_Reservation
     */
    public function setExternalBookingReference($ExternalBookingReference)
    {
      $this->ExternalBookingReference = $ExternalBookingReference;
      return $this;
    }

    /**
     * @return JP_Holder
     */
    public function getHolder()
    {
      return $this->Holder;
    }

    /**
     * @param JP_Holder $Holder
     * @return JP_Reservation
     */
    public function setHolder($Holder)
    {
      $this->Holder = $Holder;
      return $this;
    }

    /**
     * @return JP_Paxes
     */
    public function getPaxes()
    {
      return $this->Paxes;
    }

    /**
     * @param JP_Paxes $Paxes
     * @return JP_Reservation
     */
    public function setPaxes($Paxes)
    {
      $this->Paxes = $Paxes;
      return $this;
    }

    /**
     * @return ArrayOfJP_Comment
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param ArrayOfJP_Comment $Comments
     * @return JP_Reservation
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return int
     */
    public function getFinalCustomerCode()
    {
      return $this->FinalCustomerCode;
    }

    /**
     * @param int $FinalCustomerCode
     * @return JP_Reservation
     */
    public function setFinalCustomerCode($FinalCustomerCode)
    {
      $this->FinalCustomerCode = $FinalCustomerCode;
      return $this;
    }

    /**
     * @return ArrayOfJP_AgencyData
     */
    public function getAgenciesData()
    {
      return $this->AgenciesData;
    }

    /**
     * @param ArrayOfJP_AgencyData $AgenciesData
     * @return JP_Reservation
     */
    public function setAgenciesData($AgenciesData)
    {
      $this->AgenciesData = $AgenciesData;
      return $this;
    }

    /**
     * @return JP_Items
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param JP_Items $Items
     * @return JP_Reservation
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
      return $this;
    }

    /**
     * @return int
     */
    public function getReservationCode()
    {
      return $this->ReservationCode;
    }

    /**
     * @param int $ReservationCode
     * @return JP_Reservation
     */
    public function setReservationCode($ReservationCode)
    {
      $this->ReservationCode = $ReservationCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocator()
    {
      return $this->Locator;
    }

    /**
     * @param string $Locator
     * @return JP_Reservation
     */
    public function setLocator($Locator)
    {
      $this->Locator = $Locator;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingChannel()
    {
      return $this->BookingChannel;
    }

    /**
     * @param string $BookingChannel
     * @return JP_Reservation
     */
    public function setBookingChannel($BookingChannel)
    {
      $this->BookingChannel = $BookingChannel;
      return $this;
    }

    /**
     * @return JP_ResStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param JP_ResStatus $Status
     * @return JP_Reservation
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return JP_Reservation
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}

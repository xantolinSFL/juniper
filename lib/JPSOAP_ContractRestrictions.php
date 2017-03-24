<?php

class JPSOAP_ContractRestrictions
{

    /**
     * @var JPSOAP_RequiredOptionalSupplements $RequiredOptionalSupplements
     */
    protected $RequiredOptionalSupplements = null;

    /**
     * @var JPSOAP_CountryOfResidence $CountryOfResidence
     */
    protected $CountryOfResidence = null;

    /**
     * @var int $MinNights
     */
    protected $MinNights = null;

    /**
     * @var int $MaxNights
     */
    protected $MaxNights = null;

    /**
     * @var int $MinAdults
     */
    protected $MinAdults = null;

    /**
     * @var date $BookingFrom
     */
    protected $BookingFrom = null;

    /**
     * @var date $BookingTo
     */
    protected $BookingTo = null;

    /**
     * @var JPSOAP_ContractRestrictionApplication $Application
     */
    protected $Application = null;

    /**
     * @param int $MinNights
     * @param int $MaxNights
     * @param int $MinAdults
     * @param date $BookingFrom
     * @param date $BookingTo
     * @param JPSOAP_ContractRestrictionApplication $Application
     */
    public function __construct($MinNights, $MaxNights, $MinAdults, $BookingFrom, $BookingTo, $Application)
    {
      $this->MinNights = $MinNights;
      $this->MaxNights = $MaxNights;
      $this->MinAdults = $MinAdults;
      $this->BookingFrom = $BookingFrom;
      $this->BookingTo = $BookingTo;
      $this->Application = $Application;
    }

    /**
     * @return JPSOAP_RequiredOptionalSupplements
     */
    public function getRequiredOptionalSupplements()
    {
      return $this->RequiredOptionalSupplements;
    }

    /**
     * @param JPSOAP_RequiredOptionalSupplements $RequiredOptionalSupplements
     * @return JPSOAP_ContractRestrictions
     */
    public function setRequiredOptionalSupplements($RequiredOptionalSupplements)
    {
      $this->RequiredOptionalSupplements = $RequiredOptionalSupplements;
      return $this;
    }

    /**
     * @return JPSOAP_CountryOfResidence
     */
    public function getCountryOfResidence()
    {
      return $this->CountryOfResidence;
    }

    /**
     * @param JPSOAP_CountryOfResidence $CountryOfResidence
     * @return JPSOAP_ContractRestrictions
     */
    public function setCountryOfResidence($CountryOfResidence)
    {
      $this->CountryOfResidence = $CountryOfResidence;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinNights()
    {
      return $this->MinNights;
    }

    /**
     * @param int $MinNights
     * @return JPSOAP_ContractRestrictions
     */
    public function setMinNights($MinNights)
    {
      $this->MinNights = $MinNights;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNights()
    {
      return $this->MaxNights;
    }

    /**
     * @param int $MaxNights
     * @return JPSOAP_ContractRestrictions
     */
    public function setMaxNights($MaxNights)
    {
      $this->MaxNights = $MaxNights;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinAdults()
    {
      return $this->MinAdults;
    }

    /**
     * @param int $MinAdults
     * @return JPSOAP_ContractRestrictions
     */
    public function setMinAdults($MinAdults)
    {
      $this->MinAdults = $MinAdults;
      return $this;
    }

    /**
     * @return date
     */
    public function getBookingFrom()
    {
      return $this->BookingFrom;
    }

    /**
     * @param date $BookingFrom
     * @return JPSOAP_ContractRestrictions
     */
    public function setBookingFrom($BookingFrom)
    {
      $this->BookingFrom = $BookingFrom;
      return $this;
    }

    /**
     * @return date
     */
    public function getBookingTo()
    {
      return $this->BookingTo;
    }

    /**
     * @param date $BookingTo
     * @return JPSOAP_ContractRestrictions
     */
    public function setBookingTo($BookingTo)
    {
      $this->BookingTo = $BookingTo;
      return $this;
    }

    /**
     * @return JPSOAP_ContractRestrictionApplication
     */
    public function getApplication()
    {
      return $this->Application;
    }

    /**
     * @param JPSOAP_ContractRestrictionApplication $Application
     * @return JPSOAP_ContractRestrictions
     */
    public function setApplication($Application)
    {
      $this->Application = $Application;
      return $this;
    }

}

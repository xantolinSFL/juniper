<?php

class JPSOAP_hotelRatePlanCancellationPolicy
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var JPSOAP_DateIntervals $BookingDate
     */
    protected $BookingDate = null;

    /**
     * @var JPSOAP_DateIntervalsGroupsStayDates $CheckInDates
     */
    protected $CheckInDates = null;

    /**
     * @var ArrayOfJPSOAP_hotelRatePlanCancellationPolicyRule $Rules
     */
    protected $Rules = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var boolean $OnlyEarlyBooking
     */
    protected $OnlyEarlyBooking = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var boolean $NonRefundable
     */
    protected $NonRefundable = null;

    /**
     * @param int $Code
     * @param int $Priority
     * @param boolean $OnlyEarlyBooking
     * @param string $Currency
     * @param boolean $NonRefundable
     */
    public function __construct($Code, $Priority, $OnlyEarlyBooking, $Currency, $NonRefundable)
    {
      $this->Code = $Code;
      $this->Priority = $Priority;
      $this->OnlyEarlyBooking = $OnlyEarlyBooking;
      $this->Currency = $Currency;
      $this->NonRefundable = $NonRefundable;
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
     * @return JPSOAP_hotelRatePlanCancellationPolicy
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JPSOAP_hotelRatePlanCancellationPolicy
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return JPSOAP_DateIntervals
     */
    public function getBookingDate()
    {
      return $this->BookingDate;
    }

    /**
     * @param JPSOAP_DateIntervals $BookingDate
     * @return JPSOAP_hotelRatePlanCancellationPolicy
     */
    public function setBookingDate($BookingDate)
    {
      $this->BookingDate = $BookingDate;
      return $this;
    }

    /**
     * @return JPSOAP_DateIntervalsGroupsStayDates
     */
    public function getCheckInDates()
    {
      return $this->CheckInDates;
    }

    /**
     * @param JPSOAP_DateIntervalsGroupsStayDates $CheckInDates
     * @return JPSOAP_hotelRatePlanCancellationPolicy
     */
    public function setCheckInDates($CheckInDates)
    {
      $this->CheckInDates = $CheckInDates;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_hotelRatePlanCancellationPolicyRule
     */
    public function getRules()
    {
      return $this->Rules;
    }

    /**
     * @param ArrayOfJPSOAP_hotelRatePlanCancellationPolicyRule $Rules
     * @return JPSOAP_hotelRatePlanCancellationPolicy
     */
    public function setRules($Rules)
    {
      $this->Rules = $Rules;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return JPSOAP_hotelRatePlanCancellationPolicy
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return JPSOAP_hotelRatePlanCancellationPolicy
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyEarlyBooking()
    {
      return $this->OnlyEarlyBooking;
    }

    /**
     * @param boolean $OnlyEarlyBooking
     * @return JPSOAP_hotelRatePlanCancellationPolicy
     */
    public function setOnlyEarlyBooking($OnlyEarlyBooking)
    {
      $this->OnlyEarlyBooking = $OnlyEarlyBooking;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return JPSOAP_hotelRatePlanCancellationPolicy
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonRefundable()
    {
      return $this->NonRefundable;
    }

    /**
     * @param boolean $NonRefundable
     * @return JPSOAP_hotelRatePlanCancellationPolicy
     */
    public function setNonRefundable($NonRefundable)
    {
      $this->NonRefundable = $NonRefundable;
      return $this;
    }

}

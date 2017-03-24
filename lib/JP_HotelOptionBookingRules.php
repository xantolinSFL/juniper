<?php

class JP_HotelOptionBookingRules
{

    /**
     * @var JP_BookingCode $BookingCode
     */
    protected $BookingCode = null;

    /**
     * @var JP_HotelRequiredFields $HotelRequiredFields
     */
    protected $HotelRequiredFields = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicyCost
     */
    protected $CancellationPolicyCost = null;

    /**
     * @var JP_HotelOptionCheckAvail $PriceInformation
     */
    protected $PriceInformation = null;

    /**
     * @var JP_HotelOptionalElements $OptionalElements
     */
    protected $OptionalElements = null;

    /**
     * @var boolean $PaymentDestination
     */
    protected $PaymentDestination = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @param boolean $PaymentDestination
     * @param JP_AvailStatus $Status
     */
    public function __construct($PaymentDestination, $Status)
    {
      $this->PaymentDestination = $PaymentDestination;
      $this->Status = $Status;
    }

    /**
     * @return JP_BookingCode
     */
    public function getBookingCode()
    {
      return $this->BookingCode;
    }

    /**
     * @param JP_BookingCode $BookingCode
     * @return JP_HotelOptionBookingRules
     */
    public function setBookingCode($BookingCode)
    {
      $this->BookingCode = $BookingCode;
      return $this;
    }

    /**
     * @return JP_HotelRequiredFields
     */
    public function getHotelRequiredFields()
    {
      return $this->HotelRequiredFields;
    }

    /**
     * @param JP_HotelRequiredFields $HotelRequiredFields
     * @return JP_HotelOptionBookingRules
     */
    public function setHotelRequiredFields($HotelRequiredFields)
    {
      $this->HotelRequiredFields = $HotelRequiredFields;
      return $this;
    }

    /**
     * @return JP_CancellationPolicyRules
     */
    public function getCancellationPolicy()
    {
      return $this->CancellationPolicy;
    }

    /**
     * @param JP_CancellationPolicyRules $CancellationPolicy
     * @return JP_HotelOptionBookingRules
     */
    public function setCancellationPolicy($CancellationPolicy)
    {
      $this->CancellationPolicy = $CancellationPolicy;
      return $this;
    }

    /**
     * @return JP_CancellationPolicyRules
     */
    public function getCancellationPolicyCost()
    {
      return $this->CancellationPolicyCost;
    }

    /**
     * @param JP_CancellationPolicyRules $CancellationPolicyCost
     * @return JP_HotelOptionBookingRules
     */
    public function setCancellationPolicyCost($CancellationPolicyCost)
    {
      $this->CancellationPolicyCost = $CancellationPolicyCost;
      return $this;
    }

    /**
     * @return JP_HotelOptionCheckAvail
     */
    public function getPriceInformation()
    {
      return $this->PriceInformation;
    }

    /**
     * @param JP_HotelOptionCheckAvail $PriceInformation
     * @return JP_HotelOptionBookingRules
     */
    public function setPriceInformation($PriceInformation)
    {
      $this->PriceInformation = $PriceInformation;
      return $this;
    }

    /**
     * @return JP_HotelOptionalElements
     */
    public function getOptionalElements()
    {
      return $this->OptionalElements;
    }

    /**
     * @param JP_HotelOptionalElements $OptionalElements
     * @return JP_HotelOptionBookingRules
     */
    public function setOptionalElements($OptionalElements)
    {
      $this->OptionalElements = $OptionalElements;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaymentDestination()
    {
      return $this->PaymentDestination;
    }

    /**
     * @param boolean $PaymentDestination
     * @return JP_HotelOptionBookingRules
     */
    public function setPaymentDestination($PaymentDestination)
    {
      $this->PaymentDestination = $PaymentDestination;
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
     * @return JP_HotelOptionBookingRules
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}

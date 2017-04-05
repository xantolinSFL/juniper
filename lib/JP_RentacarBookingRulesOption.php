<?php

namespace Juniper\Webservice;

class JP_RentacarBookingRulesOption
{

    /**
     * @var JP_RentacarInfo $RentacarInfo
     */
    protected $RentacarInfo = null;

    /**
     * @var JP_BookingCode $BookingCode
     */
    protected $BookingCode = null;

    /**
     * @var JP_RentcarRequiredFields $RentcarRequiredFields
     */
    protected $RentcarRequiredFields = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicyCost
     */
    protected $CancellationPolicyCost = null;

    /**
     * @var JP_RentacarPriceInformation $PriceInformation
     */
    protected $PriceInformation = null;

    /**
     * @var JP_RentacarOptionalElements $OptionalElements
     */
    protected $OptionalElements = null;

    /**
     * @var string $PickUpCode
     */
    protected $PickUpCode = null;

    /**
     * @var string $DropOffCode
     */
    protected $DropOffCode = null;

    /**
     * @var string $AcrissCode
     */
    protected $AcrissCode = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @var boolean $PaymentOffice
     */
    protected $PaymentOffice = null;

    /**
     * @param string $PickUpCode
     * @param string $DropOffCode
     * @param string $AcrissCode
     * @param string $RatePlanCode
     * @param JP_AvailStatus $Status
     * @param boolean $PaymentOffice
     */
    public function __construct($PickUpCode, $DropOffCode, $AcrissCode, $RatePlanCode, $Status, $PaymentOffice)
    {
      $this->PickUpCode = $PickUpCode;
      $this->DropOffCode = $DropOffCode;
      $this->AcrissCode = $AcrissCode;
      $this->RatePlanCode = $RatePlanCode;
      $this->Status = $Status;
      $this->PaymentOffice = $PaymentOffice;
    }

    /**
     * @return JP_RentacarInfo
     */
    public function getRentacarInfo()
    {
      return $this->RentacarInfo;
    }

    /**
     * @param JP_RentacarInfo $RentacarInfo
     * @return JP_RentacarBookingRulesOption
     */
    public function setRentacarInfo($RentacarInfo)
    {
      $this->RentacarInfo = $RentacarInfo;
      return $this;
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
     * @return JP_RentacarBookingRulesOption
     */
    public function setBookingCode($BookingCode)
    {
      $this->BookingCode = $BookingCode;
      return $this;
    }

    /**
     * @return JP_RentcarRequiredFields
     */
    public function getRentcarRequiredFields()
    {
      return $this->RentcarRequiredFields;
    }

    /**
     * @param JP_RentcarRequiredFields $RentcarRequiredFields
     * @return JP_RentacarBookingRulesOption
     */
    public function setRentcarRequiredFields($RentcarRequiredFields)
    {
      $this->RentcarRequiredFields = $RentcarRequiredFields;
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
     * @return JP_RentacarBookingRulesOption
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
     * @return JP_RentacarBookingRulesOption
     */
    public function setCancellationPolicyCost($CancellationPolicyCost)
    {
      $this->CancellationPolicyCost = $CancellationPolicyCost;
      return $this;
    }

    /**
     * @return JP_RentacarPriceInformation
     */
    public function getPriceInformation()
    {
      return $this->PriceInformation;
    }

    /**
     * @param JP_RentacarPriceInformation $PriceInformation
     * @return JP_RentacarBookingRulesOption
     */
    public function setPriceInformation($PriceInformation)
    {
      $this->PriceInformation = $PriceInformation;
      return $this;
    }

    /**
     * @return JP_RentacarOptionalElements
     */
    public function getOptionalElements()
    {
      return $this->OptionalElements;
    }

    /**
     * @param JP_RentacarOptionalElements $OptionalElements
     * @return JP_RentacarBookingRulesOption
     */
    public function setOptionalElements($OptionalElements)
    {
      $this->OptionalElements = $OptionalElements;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickUpCode()
    {
      return $this->PickUpCode;
    }

    /**
     * @param string $PickUpCode
     * @return JP_RentacarBookingRulesOption
     */
    public function setPickUpCode($PickUpCode)
    {
      $this->PickUpCode = $PickUpCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDropOffCode()
    {
      return $this->DropOffCode;
    }

    /**
     * @param string $DropOffCode
     * @return JP_RentacarBookingRulesOption
     */
    public function setDropOffCode($DropOffCode)
    {
      $this->DropOffCode = $DropOffCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcrissCode()
    {
      return $this->AcrissCode;
    }

    /**
     * @param string $AcrissCode
     * @return JP_RentacarBookingRulesOption
     */
    public function setAcrissCode($AcrissCode)
    {
      $this->AcrissCode = $AcrissCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return JP_RentacarBookingRulesOption
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
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
     * @return JP_RentacarBookingRulesOption
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPaymentOffice()
    {
      return $this->PaymentOffice;
    }

    /**
     * @param boolean $PaymentOffice
     * @return JP_RentacarBookingRulesOption
     */
    public function setPaymentOffice($PaymentOffice)
    {
      $this->PaymentOffice = $PaymentOffice;
      return $this;
    }

}

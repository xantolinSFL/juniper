<?php

class JPSOAP_hotelRatePlanCancellationPolicyRule
{

    /**
     * @var int $From
     */
    protected $From = null;

    /**
     * @var int $To
     */
    protected $To = null;

    /**
     * @var int $StayLengthFrom
     */
    protected $StayLengthFrom = null;

    /**
     * @var int $StayLengthTo
     */
    protected $StayLengthTo = null;

    /**
     * @var JPSOAP_CancellationPolicyRuleTypes $Type
     */
    protected $Type = null;

    /**
     * @var float $FixedPrice
     */
    protected $FixedPrice = null;

    /**
     * @var float $PercentPrice
     */
    protected $PercentPrice = null;

    /**
     * @var JPSOAP_CancellationPolicyRuleQuotationType $ApplicationTypeNights
     */
    protected $ApplicationTypeNights = null;

    /**
     * @var int $Nights
     */
    protected $Nights = null;

    /**
     * @param int $From
     * @param int $To
     * @param int $StayLengthFrom
     * @param int $StayLengthTo
     * @param JPSOAP_CancellationPolicyRuleTypes $Type
     * @param float $FixedPrice
     * @param float $PercentPrice
     * @param JPSOAP_CancellationPolicyRuleQuotationType $ApplicationTypeNights
     * @param int $Nights
     */
    public function __construct($From, $To, $StayLengthFrom, $StayLengthTo, $Type, $FixedPrice, $PercentPrice, $ApplicationTypeNights, $Nights)
    {
      $this->From = $From;
      $this->To = $To;
      $this->StayLengthFrom = $StayLengthFrom;
      $this->StayLengthTo = $StayLengthTo;
      $this->Type = $Type;
      $this->FixedPrice = $FixedPrice;
      $this->PercentPrice = $PercentPrice;
      $this->ApplicationTypeNights = $ApplicationTypeNights;
      $this->Nights = $Nights;
    }

    /**
     * @return int
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param int $From
     * @return JPSOAP_hotelRatePlanCancellationPolicyRule
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return int
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param int $To
     * @return JPSOAP_hotelRatePlanCancellationPolicyRule
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

    /**
     * @return int
     */
    public function getStayLengthFrom()
    {
      return $this->StayLengthFrom;
    }

    /**
     * @param int $StayLengthFrom
     * @return JPSOAP_hotelRatePlanCancellationPolicyRule
     */
    public function setStayLengthFrom($StayLengthFrom)
    {
      $this->StayLengthFrom = $StayLengthFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getStayLengthTo()
    {
      return $this->StayLengthTo;
    }

    /**
     * @param int $StayLengthTo
     * @return JPSOAP_hotelRatePlanCancellationPolicyRule
     */
    public function setStayLengthTo($StayLengthTo)
    {
      $this->StayLengthTo = $StayLengthTo;
      return $this;
    }

    /**
     * @return JPSOAP_CancellationPolicyRuleTypes
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JPSOAP_CancellationPolicyRuleTypes $Type
     * @return JPSOAP_hotelRatePlanCancellationPolicyRule
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return float
     */
    public function getFixedPrice()
    {
      return $this->FixedPrice;
    }

    /**
     * @param float $FixedPrice
     * @return JPSOAP_hotelRatePlanCancellationPolicyRule
     */
    public function setFixedPrice($FixedPrice)
    {
      $this->FixedPrice = $FixedPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercentPrice()
    {
      return $this->PercentPrice;
    }

    /**
     * @param float $PercentPrice
     * @return JPSOAP_hotelRatePlanCancellationPolicyRule
     */
    public function setPercentPrice($PercentPrice)
    {
      $this->PercentPrice = $PercentPrice;
      return $this;
    }

    /**
     * @return JPSOAP_CancellationPolicyRuleQuotationType
     */
    public function getApplicationTypeNights()
    {
      return $this->ApplicationTypeNights;
    }

    /**
     * @param JPSOAP_CancellationPolicyRuleQuotationType $ApplicationTypeNights
     * @return JPSOAP_hotelRatePlanCancellationPolicyRule
     */
    public function setApplicationTypeNights($ApplicationTypeNights)
    {
      $this->ApplicationTypeNights = $ApplicationTypeNights;
      return $this;
    }

    /**
     * @return int
     */
    public function getNights()
    {
      return $this->Nights;
    }

    /**
     * @param int $Nights
     * @return JPSOAP_hotelRatePlanCancellationPolicyRule
     */
    public function setNights($Nights)
    {
      $this->Nights = $Nights;
      return $this;
    }

}

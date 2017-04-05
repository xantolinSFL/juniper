<?php

namespace Juniper\Webservice;

class JPSOAP_HotelRatePlanSupplement extends JPSOAP_BaseSupleOfferRest
{

    /**
     * @var JPSOAP_ApplicationRulesSupplement $ApplicationRules
     */
    protected $ApplicationRules = null;

    /**
     * @var JPSOAP_SuppleOfferPrices $Prices
     */
    protected $Prices = null;

    /**
     * @var ArrayOfJPSOAP_PickUpPoint $PickUpPoints
     */
    protected $PickUpPoints = null;

    /**
     * @var JPSOAP_SupplementType $Type
     */
    protected $Type = null;

    /**
     * @var int $BaseBoardCode
     */
    protected $BaseBoardCode = null;

    /**
     * @var int $BaseRoomTypeCode
     */
    protected $BaseRoomTypeCode = null;

    /**
     * @var boolean $Mandatory
     */
    protected $Mandatory = null;

    /**
     * @var boolean $Packaged
     */
    protected $Packaged = null;

    /**
     * @var string $RateCode
     */
    protected $RateCode = null;

    /**
     * @var boolean $DirectPayment
     */
    protected $DirectPayment = null;

    /**
     * @var int $Duration
     */
    protected $Duration = null;

    /**
     * @param int $Code
     * @param boolean $Active
     * @param boolean $OnRequest
     * @param int $CategoryCode
     * @param int $SpecialTypeCode
     * @param boolean $SpecialTax
     * @param JPSOAP_SupplementType $Type
     * @param int $BaseBoardCode
     * @param int $BaseRoomTypeCode
     * @param boolean $Mandatory
     * @param boolean $Packaged
     * @param string $RateCode
     * @param boolean $DirectPayment
     * @param int $Duration
     */
    public function __construct($Code, $Active, $OnRequest, $CategoryCode, $SpecialTypeCode, $SpecialTax, $Type, $BaseBoardCode, $BaseRoomTypeCode, $Mandatory, $Packaged, $RateCode, $DirectPayment, $Duration)
    {
      parent::__construct($Code, $Active, $OnRequest, $CategoryCode, $SpecialTypeCode, $SpecialTax);
      $this->Type = $Type;
      $this->BaseBoardCode = $BaseBoardCode;
      $this->BaseRoomTypeCode = $BaseRoomTypeCode;
      $this->Mandatory = $Mandatory;
      $this->Packaged = $Packaged;
      $this->RateCode = $RateCode;
      $this->DirectPayment = $DirectPayment;
      $this->Duration = $Duration;
    }

    /**
     * @return JPSOAP_ApplicationRulesSupplement
     */
    public function getApplicationRules()
    {
      return $this->ApplicationRules;
    }

    /**
     * @param JPSOAP_ApplicationRulesSupplement $ApplicationRules
     * @return JPSOAP_HotelRatePlanSupplement
     */
    public function setApplicationRules($ApplicationRules)
    {
      $this->ApplicationRules = $ApplicationRules;
      return $this;
    }

    /**
     * @return JPSOAP_SuppleOfferPrices
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param JPSOAP_SuppleOfferPrices $Prices
     * @return JPSOAP_HotelRatePlanSupplement
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_PickUpPoint
     */
    public function getPickUpPoints()
    {
      return $this->PickUpPoints;
    }

    /**
     * @param ArrayOfJPSOAP_PickUpPoint $PickUpPoints
     * @return JPSOAP_HotelRatePlanSupplement
     */
    public function setPickUpPoints($PickUpPoints)
    {
      $this->PickUpPoints = $PickUpPoints;
      return $this;
    }

    /**
     * @return JPSOAP_SupplementType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JPSOAP_SupplementType $Type
     * @return JPSOAP_HotelRatePlanSupplement
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaseBoardCode()
    {
      return $this->BaseBoardCode;
    }

    /**
     * @param int $BaseBoardCode
     * @return JPSOAP_HotelRatePlanSupplement
     */
    public function setBaseBoardCode($BaseBoardCode)
    {
      $this->BaseBoardCode = $BaseBoardCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaseRoomTypeCode()
    {
      return $this->BaseRoomTypeCode;
    }

    /**
     * @param int $BaseRoomTypeCode
     * @return JPSOAP_HotelRatePlanSupplement
     */
    public function setBaseRoomTypeCode($BaseRoomTypeCode)
    {
      $this->BaseRoomTypeCode = $BaseRoomTypeCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMandatory()
    {
      return $this->Mandatory;
    }

    /**
     * @param boolean $Mandatory
     * @return JPSOAP_HotelRatePlanSupplement
     */
    public function setMandatory($Mandatory)
    {
      $this->Mandatory = $Mandatory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPackaged()
    {
      return $this->Packaged;
    }

    /**
     * @param boolean $Packaged
     * @return JPSOAP_HotelRatePlanSupplement
     */
    public function setPackaged($Packaged)
    {
      $this->Packaged = $Packaged;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateCode()
    {
      return $this->RateCode;
    }

    /**
     * @param string $RateCode
     * @return JPSOAP_HotelRatePlanSupplement
     */
    public function setRateCode($RateCode)
    {
      $this->RateCode = $RateCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDirectPayment()
    {
      return $this->DirectPayment;
    }

    /**
     * @param boolean $DirectPayment
     * @return JPSOAP_HotelRatePlanSupplement
     */
    public function setDirectPayment($DirectPayment)
    {
      $this->DirectPayment = $DirectPayment;
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param int $Duration
     * @return JPSOAP_HotelRatePlanSupplement
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

}

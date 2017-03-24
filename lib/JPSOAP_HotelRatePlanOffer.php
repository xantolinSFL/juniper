<?php

class JPSOAP_HotelRatePlanOffer extends JPSOAP_BaseSupleOfferRest
{

    /**
     * @var JPSOAP_ApplicationRulesOffers $ApplicationRules
     */
    protected $ApplicationRules = null;

    /**
     * @var JPSOAP_SuppleOfferPrices $Prices
     */
    protected $Prices = null;

    /**
     * @var ArrayOfJPSOAP_Allotment $Allotment
     */
    protected $Allotment = null;

    /**
     * @var JPSOAP_HotelRatePlanFreeNightsOffer $FreeNights
     */
    protected $FreeNights = null;

    /**
     * @var JPSOAP_HotelRatePlanFreePaxesOffer $FreePaxes
     */
    protected $FreePaxes = null;

    /**
     * @var JPSOAP_HotelRatePlanBoardUpgradeOffer $BoardUpgrade
     */
    protected $BoardUpgrade = null;

    /**
     * @var JPSOAP_HotelRatePlanRoomUpgradeOffer $RoomUpgrade
     */
    protected $RoomUpgrade = null;

    /**
     * @var JPSOAP_OfferType $Type
     */
    protected $Type = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var string $PromoCode
     */
    protected $PromoCode = null;

    /**
     * @var boolean $MandatoryPromoCode
     */
    protected $MandatoryPromoCode = null;

    /**
     * @var int $BaseBoardCode
     */
    protected $BaseBoardCode = null;

    /**
     * @param int $Code
     * @param boolean $Active
     * @param boolean $OnRequest
     * @param int $CategoryCode
     * @param int $SpecialTypeCode
     * @param boolean $SpecialTax
     * @param JPSOAP_OfferType $Type
     * @param int $Priority
     * @param string $PromoCode
     * @param boolean $MandatoryPromoCode
     * @param int $BaseBoardCode
     */
    public function __construct($Code, $Active, $OnRequest, $CategoryCode, $SpecialTypeCode, $SpecialTax, $Type, $Priority, $PromoCode, $MandatoryPromoCode, $BaseBoardCode)
    {
      parent::__construct($Code, $Active, $OnRequest, $CategoryCode, $SpecialTypeCode, $SpecialTax);
      $this->Type = $Type;
      $this->Priority = $Priority;
      $this->PromoCode = $PromoCode;
      $this->MandatoryPromoCode = $MandatoryPromoCode;
      $this->BaseBoardCode = $BaseBoardCode;
    }

    /**
     * @return JPSOAP_ApplicationRulesOffers
     */
    public function getApplicationRules()
    {
      return $this->ApplicationRules;
    }

    /**
     * @param JPSOAP_ApplicationRulesOffers $ApplicationRules
     * @return JPSOAP_HotelRatePlanOffer
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
     * @return JPSOAP_HotelRatePlanOffer
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_Allotment
     */
    public function getAllotment()
    {
      return $this->Allotment;
    }

    /**
     * @param ArrayOfJPSOAP_Allotment $Allotment
     * @return JPSOAP_HotelRatePlanOffer
     */
    public function setAllotment($Allotment)
    {
      $this->Allotment = $Allotment;
      return $this;
    }

    /**
     * @return JPSOAP_HotelRatePlanFreeNightsOffer
     */
    public function getFreeNights()
    {
      return $this->FreeNights;
    }

    /**
     * @param JPSOAP_HotelRatePlanFreeNightsOffer $FreeNights
     * @return JPSOAP_HotelRatePlanOffer
     */
    public function setFreeNights($FreeNights)
    {
      $this->FreeNights = $FreeNights;
      return $this;
    }

    /**
     * @return JPSOAP_HotelRatePlanFreePaxesOffer
     */
    public function getFreePaxes()
    {
      return $this->FreePaxes;
    }

    /**
     * @param JPSOAP_HotelRatePlanFreePaxesOffer $FreePaxes
     * @return JPSOAP_HotelRatePlanOffer
     */
    public function setFreePaxes($FreePaxes)
    {
      $this->FreePaxes = $FreePaxes;
      return $this;
    }

    /**
     * @return JPSOAP_HotelRatePlanBoardUpgradeOffer
     */
    public function getBoardUpgrade()
    {
      return $this->BoardUpgrade;
    }

    /**
     * @param JPSOAP_HotelRatePlanBoardUpgradeOffer $BoardUpgrade
     * @return JPSOAP_HotelRatePlanOffer
     */
    public function setBoardUpgrade($BoardUpgrade)
    {
      $this->BoardUpgrade = $BoardUpgrade;
      return $this;
    }

    /**
     * @return JPSOAP_HotelRatePlanRoomUpgradeOffer
     */
    public function getRoomUpgrade()
    {
      return $this->RoomUpgrade;
    }

    /**
     * @param JPSOAP_HotelRatePlanRoomUpgradeOffer $RoomUpgrade
     * @return JPSOAP_HotelRatePlanOffer
     */
    public function setRoomUpgrade($RoomUpgrade)
    {
      $this->RoomUpgrade = $RoomUpgrade;
      return $this;
    }

    /**
     * @return JPSOAP_OfferType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JPSOAP_OfferType $Type
     * @return JPSOAP_HotelRatePlanOffer
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return JPSOAP_HotelRatePlanOffer
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromoCode()
    {
      return $this->PromoCode;
    }

    /**
     * @param string $PromoCode
     * @return JPSOAP_HotelRatePlanOffer
     */
    public function setPromoCode($PromoCode)
    {
      $this->PromoCode = $PromoCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMandatoryPromoCode()
    {
      return $this->MandatoryPromoCode;
    }

    /**
     * @param boolean $MandatoryPromoCode
     * @return JPSOAP_HotelRatePlanOffer
     */
    public function setMandatoryPromoCode($MandatoryPromoCode)
    {
      $this->MandatoryPromoCode = $MandatoryPromoCode;
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
     * @return JPSOAP_HotelRatePlanOffer
     */
    public function setBaseBoardCode($BaseBoardCode)
    {
      $this->BaseBoardCode = $BaseBoardCode;
      return $this;
    }

}

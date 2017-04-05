<?php

namespace Juniper\Webservice;

class JPSOAP_HotelRatePlanContract extends JPSOAP_Contract
{

    /**
     * @var JPSOAP_Ages $Ages
     */
    protected $Ages = null;

    /**
     * @var JPSOAP_ContractRestrictions $ContractRestrictions
     */
    protected $ContractRestrictions = null;

    /**
     * @var ArrayOfJPSOAP_hotelRatePlanRate $Rates
     */
    protected $Rates = null;

    /**
     * @var ArrayOfJPSOAP_hotelRatePlanTax $Taxes
     */
    protected $Taxes = null;

    /**
     * @var ArrayOfJPSOAP_hotelRatePlanCancellationPolicy $CancellationPolicies
     */
    protected $CancellationPolicies = null;

    /**
     * @var ArrayOfJPSOAP_HotelRatePlanSupplement $Supplements
     */
    protected $Supplements = null;

    /**
     * @var ArrayOfJPSOAP_HotelRatePlanOffer $Offers
     */
    protected $Offers = null;

    /**
     * @var ArrayOfJPSOAP_HotelRatePlanRestriction $Restrictions
     */
    protected $Restrictions = null;

    /**
     * @var JPSOAP_ContractType $ContractType
     */
    protected $ContractType = null;

    /**
     * @var boolean $Comissionable
     */
    protected $Comissionable = null;

    /**
     * @var float $ComissionPercent
     */
    protected $ComissionPercent = null;

    /**
     * @var float $ComissionTaxPercent
     */
    protected $ComissionTaxPercent = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var boolean $RecommendedPrices
     */
    protected $RecommendedPrices = null;

    /**
     * @var date $BookingFrom
     */
    protected $BookingFrom = null;

    /**
     * @var date $BookingTo
     */
    protected $BookingTo = null;

    /**
     * @var boolean $DirectPayment
     */
    protected $DirectPayment = null;

    /**
     * @var boolean $ExtranetContract
     */
    protected $ExtranetContract = null;

    /**
     * @param string $Code
     * @param string $HotelCode
     * @param string $HotelCodeEncrypt
     * @param boolean $Active
     * @param boolean $Delta
     * @param JPSOAP_ContractType $ContractType
     * @param boolean $Comissionable
     * @param float $ComissionPercent
     * @param float $ComissionTaxPercent
     * @param string $Currency
     * @param boolean $RecommendedPrices
     * @param date $BookingFrom
     * @param date $BookingTo
     * @param boolean $DirectPayment
     * @param boolean $ExtranetContract
     */
    public function __construct($Code, $HotelCode, $HotelCodeEncrypt, $Active, $Delta, $ContractType, $Comissionable, $ComissionPercent, $ComissionTaxPercent, $Currency, $RecommendedPrices, $BookingFrom, $BookingTo, $DirectPayment, $ExtranetContract)
    {
      parent::__construct($Code, $HotelCode, $HotelCodeEncrypt, $Active, $Delta);
      $this->ContractType = $ContractType;
      $this->Comissionable = $Comissionable;
      $this->ComissionPercent = $ComissionPercent;
      $this->ComissionTaxPercent = $ComissionTaxPercent;
      $this->Currency = $Currency;
      $this->RecommendedPrices = $RecommendedPrices;
      $this->BookingFrom = $BookingFrom;
      $this->BookingTo = $BookingTo;
      $this->DirectPayment = $DirectPayment;
      $this->ExtranetContract = $ExtranetContract;
    }

    /**
     * @return JPSOAP_Ages
     */
    public function getAges()
    {
      return $this->Ages;
    }

    /**
     * @param JPSOAP_Ages $Ages
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setAges($Ages)
    {
      $this->Ages = $Ages;
      return $this;
    }

    /**
     * @return JPSOAP_ContractRestrictions
     */
    public function getContractRestrictions()
    {
      return $this->ContractRestrictions;
    }

    /**
     * @param JPSOAP_ContractRestrictions $ContractRestrictions
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setContractRestrictions($ContractRestrictions)
    {
      $this->ContractRestrictions = $ContractRestrictions;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_hotelRatePlanRate
     */
    public function getRates()
    {
      return $this->Rates;
    }

    /**
     * @param ArrayOfJPSOAP_hotelRatePlanRate $Rates
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setRates($Rates)
    {
      $this->Rates = $Rates;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_hotelRatePlanTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfJPSOAP_hotelRatePlanTax $Taxes
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_hotelRatePlanCancellationPolicy
     */
    public function getCancellationPolicies()
    {
      return $this->CancellationPolicies;
    }

    /**
     * @param ArrayOfJPSOAP_hotelRatePlanCancellationPolicy $CancellationPolicies
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setCancellationPolicies($CancellationPolicies)
    {
      $this->CancellationPolicies = $CancellationPolicies;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_HotelRatePlanSupplement
     */
    public function getSupplements()
    {
      return $this->Supplements;
    }

    /**
     * @param ArrayOfJPSOAP_HotelRatePlanSupplement $Supplements
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setSupplements($Supplements)
    {
      $this->Supplements = $Supplements;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_HotelRatePlanOffer
     */
    public function getOffers()
    {
      return $this->Offers;
    }

    /**
     * @param ArrayOfJPSOAP_HotelRatePlanOffer $Offers
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setOffers($Offers)
    {
      $this->Offers = $Offers;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_HotelRatePlanRestriction
     */
    public function getRestrictions()
    {
      return $this->Restrictions;
    }

    /**
     * @param ArrayOfJPSOAP_HotelRatePlanRestriction $Restrictions
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setRestrictions($Restrictions)
    {
      $this->Restrictions = $Restrictions;
      return $this;
    }

    /**
     * @return JPSOAP_ContractType
     */
    public function getContractType()
    {
      return $this->ContractType;
    }

    /**
     * @param JPSOAP_ContractType $ContractType
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setContractType($ContractType)
    {
      $this->ContractType = $ContractType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getComissionable()
    {
      return $this->Comissionable;
    }

    /**
     * @param boolean $Comissionable
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setComissionable($Comissionable)
    {
      $this->Comissionable = $Comissionable;
      return $this;
    }

    /**
     * @return float
     */
    public function getComissionPercent()
    {
      return $this->ComissionPercent;
    }

    /**
     * @param float $ComissionPercent
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setComissionPercent($ComissionPercent)
    {
      $this->ComissionPercent = $ComissionPercent;
      return $this;
    }

    /**
     * @return float
     */
    public function getComissionTaxPercent()
    {
      return $this->ComissionTaxPercent;
    }

    /**
     * @param float $ComissionTaxPercent
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setComissionTaxPercent($ComissionTaxPercent)
    {
      $this->ComissionTaxPercent = $ComissionTaxPercent;
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
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRecommendedPrices()
    {
      return $this->RecommendedPrices;
    }

    /**
     * @param boolean $RecommendedPrices
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setRecommendedPrices($RecommendedPrices)
    {
      $this->RecommendedPrices = $RecommendedPrices;
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
     * @return JPSOAP_HotelRatePlanContract
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
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setBookingTo($BookingTo)
    {
      $this->BookingTo = $BookingTo;
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
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setDirectPayment($DirectPayment)
    {
      $this->DirectPayment = $DirectPayment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExtranetContract()
    {
      return $this->ExtranetContract;
    }

    /**
     * @param boolean $ExtranetContract
     * @return JPSOAP_HotelRatePlanContract
     */
    public function setExtranetContract($ExtranetContract)
    {
      $this->ExtranetContract = $ExtranetContract;
      return $this;
    }

}

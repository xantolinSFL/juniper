<?php

class JPSOAP_hotelRatePlanTax
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JPSOAP_DateIntervals $Date
     */
    protected $Date = null;

    /**
     * @var ArrayOfJPSOAP_IntCodeAttr1 $SupplementTypes
     */
    protected $SupplementTypes = null;

    /**
     * @var JPSOAP_Ages $Ages
     */
    protected $Ages = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var JPSOAP_TaxTypes $Type
     */
    protected $Type = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var boolean $IsFix
     */
    protected $IsFix = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var boolean $Comissionable
     */
    protected $Comissionable = null;

    /**
     * @var boolean $CancellationCharges
     */
    protected $CancellationCharges = null;

    /**
     * @var boolean $IncludedTaxes
     */
    protected $IncludedTaxes = null;

    /**
     * @var float $InfantAmount
     */
    protected $InfantAmount = null;

    /**
     * @var float $ChildAAmount
     */
    protected $ChildAAmount = null;

    /**
     * @var float $ChildBAmount
     */
    protected $ChildBAmount = null;

    /**
     * @param int $Code
     * @param JPSOAP_TaxTypes $Type
     * @param float $Amount
     * @param boolean $IsFix
     * @param string $Currency
     * @param boolean $Comissionable
     * @param boolean $CancellationCharges
     * @param boolean $IncludedTaxes
     * @param float $InfantAmount
     * @param float $ChildAAmount
     * @param float $ChildBAmount
     */
    public function __construct($Code, $Type, $Amount, $IsFix, $Currency, $Comissionable, $CancellationCharges, $IncludedTaxes, $InfantAmount, $ChildAAmount, $ChildBAmount)
    {
      $this->Code = $Code;
      $this->Type = $Type;
      $this->Amount = $Amount;
      $this->IsFix = $IsFix;
      $this->Currency = $Currency;
      $this->Comissionable = $Comissionable;
      $this->CancellationCharges = $CancellationCharges;
      $this->IncludedTaxes = $IncludedTaxes;
      $this->InfantAmount = $InfantAmount;
      $this->ChildAAmount = $ChildAAmount;
      $this->ChildBAmount = $ChildBAmount;
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
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return JPSOAP_DateIntervals
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param JPSOAP_DateIntervals $Date
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_IntCodeAttr1
     */
    public function getSupplementTypes()
    {
      return $this->SupplementTypes;
    }

    /**
     * @param ArrayOfJPSOAP_IntCodeAttr1 $SupplementTypes
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setSupplementTypes($SupplementTypes)
    {
      $this->SupplementTypes = $SupplementTypes;
      return $this;
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
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setAges($Ages)
    {
      $this->Ages = $Ages;
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
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return JPSOAP_TaxTypes
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JPSOAP_TaxTypes $Type
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFix()
    {
      return $this->IsFix;
    }

    /**
     * @param boolean $IsFix
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setIsFix($IsFix)
    {
      $this->IsFix = $IsFix;
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
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setComissionable($Comissionable)
    {
      $this->Comissionable = $Comissionable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCancellationCharges()
    {
      return $this->CancellationCharges;
    }

    /**
     * @param boolean $CancellationCharges
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setCancellationCharges($CancellationCharges)
    {
      $this->CancellationCharges = $CancellationCharges;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludedTaxes()
    {
      return $this->IncludedTaxes;
    }

    /**
     * @param boolean $IncludedTaxes
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setIncludedTaxes($IncludedTaxes)
    {
      $this->IncludedTaxes = $IncludedTaxes;
      return $this;
    }

    /**
     * @return float
     */
    public function getInfantAmount()
    {
      return $this->InfantAmount;
    }

    /**
     * @param float $InfantAmount
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setInfantAmount($InfantAmount)
    {
      $this->InfantAmount = $InfantAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getChildAAmount()
    {
      return $this->ChildAAmount;
    }

    /**
     * @param float $ChildAAmount
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setChildAAmount($ChildAAmount)
    {
      $this->ChildAAmount = $ChildAAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getChildBAmount()
    {
      return $this->ChildBAmount;
    }

    /**
     * @param float $ChildBAmount
     * @return JPSOAP_hotelRatePlanTax
     */
    public function setChildBAmount($ChildBAmount)
    {
      $this->ChildBAmount = $ChildBAmount;
      return $this;
    }

}

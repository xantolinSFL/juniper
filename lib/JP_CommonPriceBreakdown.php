<?php

namespace Juniper\Webservice;

class JP_CommonPriceBreakdown
{

    /**
     * @var ArrayOfInt $TtaCodes
     */
    protected $TtaCodes = null;

    /**
     * @var JP_CommonPriceBreakdownReduced $Total
     */
    protected $Total = null;

    /**
     * @var JP_CommonPriceBreakdownReduced $Commission
     */
    protected $Commission = null;

    /**
     * @var anonymous89 $Type
     */
    protected $Type = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @var boolean $IsFix
     */
    protected $IsFix = null;

    /**
     * @var float $TaxAAmount
     */
    protected $TaxAAmount = null;

    /**
     * @var float $TaxBAmount
     */
    protected $TaxBAmount = null;

    /**
     * @var boolean $ByNight
     */
    protected $ByNight = null;

    /**
     * @var boolean $Commissionable
     */
    protected $Commissionable = null;

    /**
     * @var boolean $Included
     */
    protected $Included = null;

    /**
     * @param anonymous89 $Type
     * @param string $Name
     * @param float $Value
     * @param boolean $IsFix
     * @param float $TaxAAmount
     * @param float $TaxBAmount
     * @param boolean $ByNight
     * @param boolean $Commissionable
     * @param boolean $Included
     */
    public function __construct($Type, $Name, $Value, $IsFix, $TaxAAmount, $TaxBAmount, $ByNight, $Commissionable, $Included)
    {
      $this->Type = $Type;
      $this->Name = $Name;
      $this->Value = $Value;
      $this->IsFix = $IsFix;
      $this->TaxAAmount = $TaxAAmount;
      $this->TaxBAmount = $TaxBAmount;
      $this->ByNight = $ByNight;
      $this->Commissionable = $Commissionable;
      $this->Included = $Included;
    }

    /**
     * @return ArrayOfInt
     */
    public function getTtaCodes()
    {
      return $this->TtaCodes;
    }

    /**
     * @param ArrayOfInt $TtaCodes
     * @return JP_CommonPriceBreakdown
     */
    public function setTtaCodes($TtaCodes)
    {
      $this->TtaCodes = $TtaCodes;
      return $this;
    }

    /**
     * @return JP_CommonPriceBreakdownReduced
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param JP_CommonPriceBreakdownReduced $Total
     * @return JP_CommonPriceBreakdown
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return JP_CommonPriceBreakdownReduced
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param JP_CommonPriceBreakdownReduced $Commission
     * @return JP_CommonPriceBreakdown
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return anonymous89
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous89 $Type
     * @return JP_CommonPriceBreakdown
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
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
     * @return JP_CommonPriceBreakdown
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return JP_CommonPriceBreakdown
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
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
     * @return JP_CommonPriceBreakdown
     */
    public function setIsFix($IsFix)
    {
      $this->IsFix = $IsFix;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxAAmount()
    {
      return $this->TaxAAmount;
    }

    /**
     * @param float $TaxAAmount
     * @return JP_CommonPriceBreakdown
     */
    public function setTaxAAmount($TaxAAmount)
    {
      $this->TaxAAmount = $TaxAAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxBAmount()
    {
      return $this->TaxBAmount;
    }

    /**
     * @param float $TaxBAmount
     * @return JP_CommonPriceBreakdown
     */
    public function setTaxBAmount($TaxBAmount)
    {
      $this->TaxBAmount = $TaxBAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getByNight()
    {
      return $this->ByNight;
    }

    /**
     * @param boolean $ByNight
     * @return JP_CommonPriceBreakdown
     */
    public function setByNight($ByNight)
    {
      $this->ByNight = $ByNight;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCommissionable()
    {
      return $this->Commissionable;
    }

    /**
     * @param boolean $Commissionable
     * @return JP_CommonPriceBreakdown
     */
    public function setCommissionable($Commissionable)
    {
      $this->Commissionable = $Commissionable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncluded()
    {
      return $this->Included;
    }

    /**
     * @param boolean $Included
     * @return JP_CommonPriceBreakdown
     */
    public function setIncluded($Included)
    {
      $this->Included = $Included;
      return $this;
    }

}

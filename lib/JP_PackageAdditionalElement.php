<?php

class JP_PackageAdditionalElement
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
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Class
     */
    protected $Class = null;

    /**
     * @var JP_SupplementType $Type
     */
    protected $Type = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var string $SpecialType
     */
    protected $SpecialType = null;

    /**
     * @var boolean $DirectPayment
     */
    protected $DirectPayment = null;

    /**
     * @var boolean $NonRefundable
     */
    protected $NonRefundable = null;

    /**
     * @var boolean $Optional
     */
    protected $Optional = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var date $Begin
     */
    protected $Begin = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @var JP_SupplementApplicationType $ApplicationType
     */
    protected $ApplicationType = null;

    /**
     * @param string $Code
     * @param string $Class
     * @param JP_SupplementType $Type
     * @param string $Category
     * @param string $SpecialType
     * @param boolean $DirectPayment
     * @param boolean $NonRefundable
     * @param boolean $Optional
     * @param int $Quantity
     * @param date $Begin
     * @param date $End
     * @param float $Amount
     * @param string $Currency
     * @param string $RatePlanCode
     * @param int $Order
     * @param JP_SupplementApplicationType $ApplicationType
     */
    public function __construct($Code, $Class, $Type, $Category, $SpecialType, $DirectPayment, $NonRefundable, $Optional, $Quantity, $Begin, $End, $Amount, $Currency, $RatePlanCode, $Order, $ApplicationType)
    {
      $this->Code = $Code;
      $this->Class = $Class;
      $this->Type = $Type;
      $this->Category = $Category;
      $this->SpecialType = $SpecialType;
      $this->DirectPayment = $DirectPayment;
      $this->NonRefundable = $NonRefundable;
      $this->Optional = $Optional;
      $this->Quantity = $Quantity;
      $this->Begin = $Begin;
      $this->End = $End;
      $this->Amount = $Amount;
      $this->Currency = $Currency;
      $this->RatePlanCode = $RatePlanCode;
      $this->Order = $Order;
      $this->ApplicationType = $ApplicationType;
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
     * @return JP_PackageAdditionalElement
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
     * @return JP_PackageAdditionalElement
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfJP_Price
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfJP_Price $Prices
     * @return JP_PackageAdditionalElement
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_PackageAdditionalElement
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param string $Class
     * @return JP_PackageAdditionalElement
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
      return $this;
    }

    /**
     * @return JP_SupplementType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JP_SupplementType $Type
     * @return JP_PackageAdditionalElement
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return JP_PackageAdditionalElement
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialType()
    {
      return $this->SpecialType;
    }

    /**
     * @param string $SpecialType
     * @return JP_PackageAdditionalElement
     */
    public function setSpecialType($SpecialType)
    {
      $this->SpecialType = $SpecialType;
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
     * @return JP_PackageAdditionalElement
     */
    public function setDirectPayment($DirectPayment)
    {
      $this->DirectPayment = $DirectPayment;
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
     * @return JP_PackageAdditionalElement
     */
    public function setNonRefundable($NonRefundable)
    {
      $this->NonRefundable = $NonRefundable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOptional()
    {
      return $this->Optional;
    }

    /**
     * @param boolean $Optional
     * @return JP_PackageAdditionalElement
     */
    public function setOptional($Optional)
    {
      $this->Optional = $Optional;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return JP_PackageAdditionalElement
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return date
     */
    public function getBegin()
    {
      return $this->Begin;
    }

    /**
     * @param date $Begin
     * @return JP_PackageAdditionalElement
     */
    public function setBegin($Begin)
    {
      $this->Begin = $Begin;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return JP_PackageAdditionalElement
     */
    public function setEnd($End)
    {
      $this->End = $End;
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
     * @return JP_PackageAdditionalElement
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return JP_PackageAdditionalElement
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return JP_PackageAdditionalElement
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param int $Order
     * @return JP_PackageAdditionalElement
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return JP_SupplementApplicationType
     */
    public function getApplicationType()
    {
      return $this->ApplicationType;
    }

    /**
     * @param JP_SupplementApplicationType $ApplicationType
     * @return JP_PackageAdditionalElement
     */
    public function setApplicationType($ApplicationType)
    {
      $this->ApplicationType = $ApplicationType;
      return $this;
    }

}

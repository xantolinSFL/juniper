<?php

class JP_CarSupplement
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
     * @var int $PriceType
     */
    protected $PriceType = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var int $Units
     */
    protected $Units = null;

    /**
     * @var int $UntMin
     */
    protected $UntMin = null;

    /**
     * @var int $UntMax
     */
    protected $UntMax = null;

    /**
     * @var boolean $PaymentOffice
     */
    protected $PaymentOffice = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

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
     * @param int $PriceType
     * @param string $Code
     * @param int $Units
     * @param int $UntMin
     * @param int $UntMax
     * @param boolean $PaymentOffice
     * @param JP_AvailStatus $Status
     * @param float $Amount
     * @param string $Currency
     * @param string $RatePlanCode
     */
    public function __construct($PriceType, $Code, $Units, $UntMin, $UntMax, $PaymentOffice, $Status, $Amount, $Currency, $RatePlanCode)
    {
      $this->PriceType = $PriceType;
      $this->Code = $Code;
      $this->Units = $Units;
      $this->UntMin = $UntMin;
      $this->UntMax = $UntMax;
      $this->PaymentOffice = $PaymentOffice;
      $this->Status = $Status;
      $this->Amount = $Amount;
      $this->Currency = $Currency;
      $this->RatePlanCode = $RatePlanCode;
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
     * @return JP_CarSupplement
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
     * @return JP_CarSupplement
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
     * @return JP_CarSupplement
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriceType()
    {
      return $this->PriceType;
    }

    /**
     * @param int $PriceType
     * @return JP_CarSupplement
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
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
     * @return JP_CarSupplement
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param int $Units
     * @return JP_CarSupplement
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

    /**
     * @return int
     */
    public function getUntMin()
    {
      return $this->UntMin;
    }

    /**
     * @param int $UntMin
     * @return JP_CarSupplement
     */
    public function setUntMin($UntMin)
    {
      $this->UntMin = $UntMin;
      return $this;
    }

    /**
     * @return int
     */
    public function getUntMax()
    {
      return $this->UntMax;
    }

    /**
     * @param int $UntMax
     * @return JP_CarSupplement
     */
    public function setUntMax($UntMax)
    {
      $this->UntMax = $UntMax;
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
     * @return JP_CarSupplement
     */
    public function setPaymentOffice($PaymentOffice)
    {
      $this->PaymentOffice = $PaymentOffice;
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
     * @return JP_CarSupplement
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return JP_CarSupplement
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
     * @return JP_CarSupplement
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
     * @return JP_CarSupplement
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}

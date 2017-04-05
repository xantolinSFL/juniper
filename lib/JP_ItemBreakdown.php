<?php

namespace Juniper\Webservice;

class JP_ItemBreakdown
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var date $Date
     */
    protected $Date = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $Days
     */
    protected $Days = null;

    /**
     * @var string $PaxType
     */
    protected $PaxType = null;

    /**
     * @var int $TtaCode
     */
    protected $TtaCode = null;

    /**
     * @var float $SupplierAmount
     */
    protected $SupplierAmount = null;

    /**
     * @var string $SupplierCurrency
     */
    protected $SupplierCurrency = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @param float $Amount
     * @param date $Date
     * @param int $Quantity
     * @param int $Days
     * @param string $PaxType
     * @param int $TtaCode
     * @param float $SupplierAmount
     * @param string $SupplierCurrency
     * @param string $Source
     */
    public function __construct($Amount, $Date, $Quantity, $Days, $PaxType, $TtaCode, $SupplierAmount, $SupplierCurrency, $Source)
    {
      $this->Amount = $Amount;
      $this->Date = $Date;
      $this->Quantity = $Quantity;
      $this->Days = $Days;
      $this->PaxType = $PaxType;
      $this->TtaCode = $TtaCode;
      $this->SupplierAmount = $SupplierAmount;
      $this->SupplierCurrency = $SupplierCurrency;
      $this->Source = $Source;
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
     * @return JP_ItemBreakdown
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param date $Date
     * @return JP_ItemBreakdown
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
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
     * @return JP_ItemBreakdown
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getDays()
    {
      return $this->Days;
    }

    /**
     * @param int $Days
     * @return JP_ItemBreakdown
     */
    public function setDays($Days)
    {
      $this->Days = $Days;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaxType()
    {
      return $this->PaxType;
    }

    /**
     * @param string $PaxType
     * @return JP_ItemBreakdown
     */
    public function setPaxType($PaxType)
    {
      $this->PaxType = $PaxType;
      return $this;
    }

    /**
     * @return int
     */
    public function getTtaCode()
    {
      return $this->TtaCode;
    }

    /**
     * @param int $TtaCode
     * @return JP_ItemBreakdown
     */
    public function setTtaCode($TtaCode)
    {
      $this->TtaCode = $TtaCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getSupplierAmount()
    {
      return $this->SupplierAmount;
    }

    /**
     * @param float $SupplierAmount
     * @return JP_ItemBreakdown
     */
    public function setSupplierAmount($SupplierAmount)
    {
      $this->SupplierAmount = $SupplierAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierCurrency()
    {
      return $this->SupplierCurrency;
    }

    /**
     * @param string $SupplierCurrency
     * @return JP_ItemBreakdown
     */
    public function setSupplierCurrency($SupplierCurrency)
    {
      $this->SupplierCurrency = $SupplierCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return JP_ItemBreakdown
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JP_CarFee
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $PriceType
     */
    protected $PriceType = null;

    /**
     * @var boolean $PaymentOffice
     */
    protected $PaymentOffice = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @param int $PriceType
     * @param boolean $PaymentOffice
     * @param float $Amount
     * @param string $Currency
     */
    public function __construct($PriceType, $PaymentOffice, $Amount, $Currency)
    {
      $this->PriceType = $PriceType;
      $this->PaymentOffice = $PaymentOffice;
      $this->Amount = $Amount;
      $this->Currency = $Currency;
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
     * @return JP_CarFee
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return JP_CarFee
     */
    public function setPriceType($PriceType)
    {
      $this->PriceType = $PriceType;
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
     * @return JP_CarFee
     */
    public function setPaymentOffice($PaymentOffice)
    {
      $this->PaymentOffice = $PaymentOffice;
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
     * @return JP_CarFee
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
     * @return JP_CarFee
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

}

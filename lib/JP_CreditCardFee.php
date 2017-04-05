<?php

namespace Juniper\Webservice;

class JP_CreditCardFee
{

    /**
     * @var JP_Price $Price
     */
    protected $Price = null;

    /**
     * @var JP_CreditCardType $CardCode
     */
    protected $CardCode = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $PerPax
     */
    protected $PerPax = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param JP_CreditCardType $CardCode
     * @param string $Name
     * @param boolean $PerPax
     * @param string $RatePlanCode
     */
    public function __construct($CardCode, $Name, $PerPax, $RatePlanCode)
    {
      $this->CardCode = $CardCode;
      $this->Name = $Name;
      $this->PerPax = $PerPax;
      $this->RatePlanCode = $RatePlanCode;
    }

    /**
     * @return JP_Price
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param JP_Price $Price
     * @return JP_CreditCardFee
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return JP_CreditCardType
     */
    public function getCardCode()
    {
      return $this->CardCode;
    }

    /**
     * @param JP_CreditCardType $CardCode
     * @return JP_CreditCardFee
     */
    public function setCardCode($CardCode)
    {
      $this->CardCode = $CardCode;
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
     * @return JP_CreditCardFee
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPerPax()
    {
      return $this->PerPax;
    }

    /**
     * @param boolean $PerPax
     * @return JP_CreditCardFee
     */
    public function setPerPax($PerPax)
    {
      $this->PerPax = $PerPax;
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
     * @return JP_CreditCardFee
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}

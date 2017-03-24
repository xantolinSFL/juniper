<?php

class JP_PaymentPrice
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param float $Amount
     */
    public function __construct($Amount)
    {
      $this->Amount = $Amount;
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
     * @return JP_PaymentPrice
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}

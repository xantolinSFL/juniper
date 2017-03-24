<?php

class JPSOAP_Price
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $Recommended
     */
    protected $Recommended = null;

    /**
     * @param float $Amount
     * @param float $Recommended
     */
    public function __construct($Amount, $Recommended)
    {
      $this->Amount = $Amount;
      $this->Recommended = $Recommended;
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
     * @return JPSOAP_Price
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecommended()
    {
      return $this->Recommended;
    }

    /**
     * @param float $Recommended
     * @return JPSOAP_Price
     */
    public function setRecommended($Recommended)
    {
      $this->Recommended = $Recommended;
      return $this;
    }

}

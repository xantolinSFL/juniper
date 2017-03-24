<?php

class JP_CommonPriceBreakdownReduced
{

    /**
     * @var float $Base
     */
    protected $Base = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param float $Base
     * @param float $Amount
     */
    public function __construct($Base, $Amount)
    {
      $this->Base = $Base;
      $this->Amount = $Amount;
    }

    /**
     * @return float
     */
    public function getBase()
    {
      return $this->Base;
    }

    /**
     * @param float $Base
     * @return JP_CommonPriceBreakdownReduced
     */
    public function setBase($Base)
    {
      $this->Base = $Base;
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
     * @return JP_CommonPriceBreakdownReduced
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}

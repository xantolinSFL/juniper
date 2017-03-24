<?php

class JP_Price
{

    /**
     * @var JP_TotalFixAmounts $TotalFixAmounts
     */
    protected $TotalFixAmounts = null;

    /**
     * @var JP_BreakdownPrice $Breakdown
     */
    protected $Breakdown = null;

    /**
     * @var anonymous74 $Type
     */
    protected $Type = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @param anonymous74 $Type
     * @param string $Currency
     */
    public function __construct($Type, $Currency)
    {
      $this->Type = $Type;
      $this->Currency = $Currency;
    }

    /**
     * @return JP_TotalFixAmounts
     */
    public function getTotalFixAmounts()
    {
      return $this->TotalFixAmounts;
    }

    /**
     * @param JP_TotalFixAmounts $TotalFixAmounts
     * @return JP_Price
     */
    public function setTotalFixAmounts($TotalFixAmounts)
    {
      $this->TotalFixAmounts = $TotalFixAmounts;
      return $this;
    }

    /**
     * @return JP_BreakdownPrice
     */
    public function getBreakdown()
    {
      return $this->Breakdown;
    }

    /**
     * @param JP_BreakdownPrice $Breakdown
     * @return JP_Price
     */
    public function setBreakdown($Breakdown)
    {
      $this->Breakdown = $Breakdown;
      return $this;
    }

    /**
     * @return anonymous74
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous74 $Type
     * @return JP_Price
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return JP_Price
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

}

<?php

abstract class JP_BookingRulesAdvancedOptions extends JP_BaseAdvancedOptions
{

    /**
     * @var string $UseCurrency
     */
    protected $UseCurrency = null;

    /**
     * @var boolean $ShowBreakdownPrice
     */
    protected $ShowBreakdownPrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getUseCurrency()
    {
      return $this->UseCurrency;
    }

    /**
     * @param string $UseCurrency
     * @return JP_BookingRulesAdvancedOptions
     */
    public function setUseCurrency($UseCurrency)
    {
      $this->UseCurrency = $UseCurrency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowBreakdownPrice()
    {
      return $this->ShowBreakdownPrice;
    }

    /**
     * @param boolean $ShowBreakdownPrice
     * @return JP_BookingRulesAdvancedOptions
     */
    public function setShowBreakdownPrice($ShowBreakdownPrice)
    {
      $this->ShowBreakdownPrice = $ShowBreakdownPrice;
      return $this;
    }

}

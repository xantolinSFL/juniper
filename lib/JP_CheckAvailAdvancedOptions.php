<?php

namespace Juniper\Webservice;

abstract class JP_CheckAvailAdvancedOptions extends JP_BaseAdvancedOptions
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
     * @return JP_CheckAvailAdvancedOptions
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
     * @return JP_CheckAvailAdvancedOptions
     */
    public function setShowBreakdownPrice($ShowBreakdownPrice)
    {
      $this->ShowBreakdownPrice = $ShowBreakdownPrice;
      return $this;
    }

}

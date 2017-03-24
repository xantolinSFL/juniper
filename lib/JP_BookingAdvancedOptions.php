<?php

abstract class JP_BookingAdvancedOptions extends JP_BaseAdvancedOptions
{

    /**
     * @var string $UseCurrency
     */
    protected $UseCurrency = null;

    /**
     * @var JP_SendMailTo $SendMailTo
     */
    protected $SendMailTo = null;

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
     * @return JP_BookingAdvancedOptions
     */
    public function setUseCurrency($UseCurrency)
    {
      $this->UseCurrency = $UseCurrency;
      return $this;
    }

    /**
     * @return JP_SendMailTo
     */
    public function getSendMailTo()
    {
      return $this->SendMailTo;
    }

    /**
     * @param JP_SendMailTo $SendMailTo
     * @return JP_BookingAdvancedOptions
     */
    public function setSendMailTo($SendMailTo)
    {
      $this->SendMailTo = $SendMailTo;
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
     * @return JP_BookingAdvancedOptions
     */
    public function setShowBreakdownPrice($ShowBreakdownPrice)
    {
      $this->ShowBreakdownPrice = $ShowBreakdownPrice;
      return $this;
    }

}

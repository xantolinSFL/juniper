<?php

namespace Juniper\Webservice;

class JP_CancelAdvancedOptions extends JP_BaseAdvancedOptions
{

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
     * @return JP_SendMailTo
     */
    public function getSendMailTo()
    {
      return $this->SendMailTo;
    }

    /**
     * @param JP_SendMailTo $SendMailTo
     * @return JP_CancelAdvancedOptions
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
     * @return JP_CancelAdvancedOptions
     */
    public function setShowBreakdownPrice($ShowBreakdownPrice)
    {
      $this->ShowBreakdownPrice = $ShowBreakdownPrice;
      return $this;
    }

}

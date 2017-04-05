<?php

namespace Juniper\Webservice;

class JP_Commissions
{

    /**
     * @var boolean $Included
     */
    protected $Included = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @param boolean $Included
     * @param float $Amount
     */
    public function __construct($Included, $Amount)
    {
      $this->Included = $Included;
      $this->Amount = $Amount;
    }

    /**
     * @return boolean
     */
    public function getIncluded()
    {
      return $this->Included;
    }

    /**
     * @param boolean $Included
     * @return JP_Commissions
     */
    public function setIncluded($Included)
    {
      $this->Included = $Included;
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
     * @return JP_Commissions
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}

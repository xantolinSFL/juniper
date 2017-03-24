<?php

class JPSOAP_OrderedTypedPrice extends JPSOAP_OrderedPrice
{

    /**
     * @var JPSOAP_PriceTypes $Type
     */
    protected $Type = null;

    /**
     * @param float $Amount
     * @param float $Recommended
     * @param int $Order
     * @param JPSOAP_PriceTypes $Type
     */
    public function __construct($Amount, $Recommended, $Order, $Type)
    {
      parent::__construct($Amount, $Recommended, $Order);
      $this->Type = $Type;
    }

    /**
     * @return JPSOAP_PriceTypes
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JPSOAP_PriceTypes $Type
     * @return JPSOAP_OrderedTypedPrice
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JPSOAP_PriceTyped extends JPSOAP_Price
{

    /**
     * @var JPSOAP_PriceTypes $Type
     */
    protected $Type = null;

    /**
     * @param float $Amount
     * @param float $Recommended
     * @param JPSOAP_PriceTypes $Type
     */
    public function __construct($Amount, $Recommended, $Type)
    {
      parent::__construct($Amount, $Recommended);
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
     * @return JPSOAP_PriceTyped
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JPSOAP_OrderedPrice extends JPSOAP_Price
{

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @param float $Amount
     * @param float $Recommended
     * @param int $Order
     */
    public function __construct($Amount, $Recommended, $Order)
    {
      parent::__construct($Amount, $Recommended);
      $this->Order = $Order;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param int $Order
     * @return JPSOAP_OrderedPrice
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}

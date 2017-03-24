<?php

class JPSOAP_Order
{

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @param int $Order
     */
    public function __construct($Order)
    {
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
     * @return JPSOAP_Order
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}

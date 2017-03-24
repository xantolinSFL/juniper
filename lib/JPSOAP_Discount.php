<?php

class JPSOAP_Discount
{

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @var float $Discount
     */
    protected $Discount = null;

    /**
     * @param int $Order
     * @param float $Discount
     */
    public function __construct($Order, $Discount)
    {
      $this->Order = $Order;
      $this->Discount = $Discount;
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
     * @return JPSOAP_Discount
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param float $Discount
     * @return JPSOAP_Discount
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

}

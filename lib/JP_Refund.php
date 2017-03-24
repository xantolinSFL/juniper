<?php

class JP_Refund
{

    /**
     * @var string $OrderCode
     */
    protected $OrderCode = null;

    /**
     * @var string $PaymentType
     */
    protected $PaymentType = null;

    /**
     * @param string $PaymentType
     */
    public function __construct($PaymentType)
    {
      $this->PaymentType = $PaymentType;
    }

    /**
     * @return string
     */
    public function getOrderCode()
    {
      return $this->OrderCode;
    }

    /**
     * @param string $OrderCode
     * @return JP_Refund
     */
    public function setOrderCode($OrderCode)
    {
      $this->OrderCode = $OrderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
      return $this->PaymentType;
    }

    /**
     * @param string $PaymentType
     * @return JP_Refund
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

}

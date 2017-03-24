<?php

class JP_PaymentInfo
{

    /**
     * @var JP_PaymentPrice $Price
     */
    protected $Price = null;

    /**
     * @var string $OrderCode
     */
    protected $OrderCode = null;

    /**
     * @var string $PaymentCode
     */
    protected $PaymentCode = null;

    /**
     * @var string $AcceptanceCode
     */
    protected $AcceptanceCode = null;

    /**
     * @var int $ECI
     */
    protected $ECI = null;

    /**
     * @var string $PaymentMethod
     */
    protected $PaymentMethod = null;

    /**
     * @var string $BrandCard
     */
    protected $BrandCard = null;

    /**
     * @param string $OrderCode
     * @param string $PaymentCode
     * @param string $AcceptanceCode
     * @param int $ECI
     * @param string $PaymentMethod
     * @param string $BrandCard
     */
    public function __construct($OrderCode, $PaymentCode, $AcceptanceCode, $ECI, $PaymentMethod, $BrandCard)
    {
      $this->OrderCode = $OrderCode;
      $this->PaymentCode = $PaymentCode;
      $this->AcceptanceCode = $AcceptanceCode;
      $this->ECI = $ECI;
      $this->PaymentMethod = $PaymentMethod;
      $this->BrandCard = $BrandCard;
    }

    /**
     * @return JP_PaymentPrice
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param JP_PaymentPrice $Price
     * @return JP_PaymentInfo
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
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
     * @return JP_PaymentInfo
     */
    public function setOrderCode($OrderCode)
    {
      $this->OrderCode = $OrderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentCode()
    {
      return $this->PaymentCode;
    }

    /**
     * @param string $PaymentCode
     * @return JP_PaymentInfo
     */
    public function setPaymentCode($PaymentCode)
    {
      $this->PaymentCode = $PaymentCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcceptanceCode()
    {
      return $this->AcceptanceCode;
    }

    /**
     * @param string $AcceptanceCode
     * @return JP_PaymentInfo
     */
    public function setAcceptanceCode($AcceptanceCode)
    {
      $this->AcceptanceCode = $AcceptanceCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getECI()
    {
      return $this->ECI;
    }

    /**
     * @param int $ECI
     * @return JP_PaymentInfo
     */
    public function setECI($ECI)
    {
      $this->ECI = $ECI;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
      return $this->PaymentMethod;
    }

    /**
     * @param string $PaymentMethod
     * @return JP_PaymentInfo
     */
    public function setPaymentMethod($PaymentMethod)
    {
      $this->PaymentMethod = $PaymentMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandCard()
    {
      return $this->BrandCard;
    }

    /**
     * @param string $BrandCard
     * @return JP_PaymentInfo
     */
    public function setBrandCard($BrandCard)
    {
      $this->BrandCard = $BrandCard;
      return $this;
    }

}

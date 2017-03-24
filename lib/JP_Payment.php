<?php

class JP_Payment
{

    /**
     * @var JP_PaymentPrice $Price
     */
    protected $Price = null;

    /**
     * @var JP_CreditCardInfo $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var Action $Action
     */
    protected $Action = null;

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
     * @return JP_PaymentPrice
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param JP_PaymentPrice $Price
     * @return JP_Payment
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return JP_CreditCardInfo
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param JP_CreditCardInfo $CreditCard
     * @return JP_Payment
     */
    public function setCreditCard($CreditCard)
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

    /**
     * @return Action
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param Action $Action
     * @return JP_Payment
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
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
     * @return JP_Payment
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

}

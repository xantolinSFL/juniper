<?php

class JP_PaymentRequest
{

    /**
     * @var string $CheckPaymentToken
     */
    protected $CheckPaymentToken = null;

    /**
     * @var JP_Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var JP_Refund $Refund
     */
    protected $Refund = null;

    /**
     * @var string $ReservationLocator
     */
    protected $ReservationLocator = null;

    /**
     * @param string $ReservationLocator
     */
    public function __construct($ReservationLocator)
    {
      $this->ReservationLocator = $ReservationLocator;
    }

    /**
     * @return string
     */
    public function getCheckPaymentToken()
    {
      return $this->CheckPaymentToken;
    }

    /**
     * @param string $CheckPaymentToken
     * @return JP_PaymentRequest
     */
    public function setCheckPaymentToken($CheckPaymentToken)
    {
      $this->CheckPaymentToken = $CheckPaymentToken;
      return $this;
    }

    /**
     * @return JP_Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param JP_Payment $Payment
     * @return JP_PaymentRequest
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return JP_Refund
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param JP_Refund $Refund
     * @return JP_PaymentRequest
     */
    public function setRefund($Refund)
    {
      $this->Refund = $Refund;
      return $this;
    }

    /**
     * @return string
     */
    public function getReservationLocator()
    {
      return $this->ReservationLocator;
    }

    /**
     * @param string $ReservationLocator
     * @return JP_PaymentRequest
     */
    public function setReservationLocator($ReservationLocator)
    {
      $this->ReservationLocator = $ReservationLocator;
      return $this;
    }

}

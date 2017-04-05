<?php

namespace Juniper\Webservice;

class JP_PaymentReservation
{

    /**
     * @var JP_PaymentInfo $PaymentInfo
     */
    protected $PaymentInfo = null;

    /**
     * @var string $Locator
     */
    protected $Locator = null;

    /**
     * @var JP_ResStatus $Status
     */
    protected $Status = null;

    /**
     * @param string $Locator
     * @param JP_ResStatus $Status
     */
    public function __construct($Locator, $Status)
    {
      $this->Locator = $Locator;
      $this->Status = $Status;
    }

    /**
     * @return JP_PaymentInfo
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param JP_PaymentInfo $PaymentInfo
     * @return JP_PaymentReservation
     */
    public function setPaymentInfo($PaymentInfo)
    {
      $this->PaymentInfo = $PaymentInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocator()
    {
      return $this->Locator;
    }

    /**
     * @param string $Locator
     * @return JP_PaymentReservation
     */
    public function setLocator($Locator)
    {
      $this->Locator = $Locator;
      return $this;
    }

    /**
     * @return JP_ResStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param JP_ResStatus $Status
     * @return JP_PaymentReservation
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}

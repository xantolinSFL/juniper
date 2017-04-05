<?php

namespace Juniper\Webservice;

class JP_FlightBookingRules
{

    /**
     * @var JP_BookingCode $BookingCode
     */
    protected $BookingCode = null;

    /**
     * @var JP_FlightRequiredFields $FlightRequiredFields
     */
    protected $FlightRequiredFields = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicyCost
     */
    protected $CancellationPolicyCost = null;

    /**
     * @var JP_FlightPriceInformation $PriceInformation
     */
    protected $PriceInformation = null;

    /**
     * @var JP_OptionalElements $OptionalElements
     */
    protected $OptionalElements = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $Direction
     */
    protected $Direction = null;

    /**
     * @var boolean $LowCost
     */
    protected $LowCost = null;

    /**
     * @var string $Additionalnformation
     */
    protected $Additionalnformation = null;

    /**
     * @param JP_AvailStatus $Status
     * @param string $Direction
     * @param boolean $LowCost
     * @param string $Additionalnformation
     */
    public function __construct($Status, $Direction, $LowCost, $Additionalnformation)
    {
      $this->Status = $Status;
      $this->Direction = $Direction;
      $this->LowCost = $LowCost;
      $this->Additionalnformation = $Additionalnformation;
    }

    /**
     * @return JP_BookingCode
     */
    public function getBookingCode()
    {
      return $this->BookingCode;
    }

    /**
     * @param JP_BookingCode $BookingCode
     * @return JP_FlightBookingRules
     */
    public function setBookingCode($BookingCode)
    {
      $this->BookingCode = $BookingCode;
      return $this;
    }

    /**
     * @return JP_FlightRequiredFields
     */
    public function getFlightRequiredFields()
    {
      return $this->FlightRequiredFields;
    }

    /**
     * @param JP_FlightRequiredFields $FlightRequiredFields
     * @return JP_FlightBookingRules
     */
    public function setFlightRequiredFields($FlightRequiredFields)
    {
      $this->FlightRequiredFields = $FlightRequiredFields;
      return $this;
    }

    /**
     * @return JP_CancellationPolicyRules
     */
    public function getCancellationPolicy()
    {
      return $this->CancellationPolicy;
    }

    /**
     * @param JP_CancellationPolicyRules $CancellationPolicy
     * @return JP_FlightBookingRules
     */
    public function setCancellationPolicy($CancellationPolicy)
    {
      $this->CancellationPolicy = $CancellationPolicy;
      return $this;
    }

    /**
     * @return JP_CancellationPolicyRules
     */
    public function getCancellationPolicyCost()
    {
      return $this->CancellationPolicyCost;
    }

    /**
     * @param JP_CancellationPolicyRules $CancellationPolicyCost
     * @return JP_FlightBookingRules
     */
    public function setCancellationPolicyCost($CancellationPolicyCost)
    {
      $this->CancellationPolicyCost = $CancellationPolicyCost;
      return $this;
    }

    /**
     * @return JP_FlightPriceInformation
     */
    public function getPriceInformation()
    {
      return $this->PriceInformation;
    }

    /**
     * @param JP_FlightPriceInformation $PriceInformation
     * @return JP_FlightBookingRules
     */
    public function setPriceInformation($PriceInformation)
    {
      $this->PriceInformation = $PriceInformation;
      return $this;
    }

    /**
     * @return JP_OptionalElements
     */
    public function getOptionalElements()
    {
      return $this->OptionalElements;
    }

    /**
     * @param JP_OptionalElements $OptionalElements
     * @return JP_FlightBookingRules
     */
    public function setOptionalElements($OptionalElements)
    {
      $this->OptionalElements = $OptionalElements;
      return $this;
    }

    /**
     * @return JP_AvailStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param JP_AvailStatus $Status
     * @return JP_FlightBookingRules
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param string $Direction
     * @return JP_FlightBookingRules
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLowCost()
    {
      return $this->LowCost;
    }

    /**
     * @param boolean $LowCost
     * @return JP_FlightBookingRules
     */
    public function setLowCost($LowCost)
    {
      $this->LowCost = $LowCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalnformation()
    {
      return $this->Additionalnformation;
    }

    /**
     * @param string $Additionalnformation
     * @return JP_FlightBookingRules
     */
    public function setAdditionalnformation($Additionalnformation)
    {
      $this->Additionalnformation = $Additionalnformation;
      return $this;
    }

}

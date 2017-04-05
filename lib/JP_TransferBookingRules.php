<?php

namespace Juniper\Webservice;

class JP_TransferBookingRules
{

    /**
     * @var JP_BookingCode $BookingCode
     */
    protected $BookingCode = null;

    /**
     * @var JP_TransferRequiredFields $TransferRequiredFields
     */
    protected $TransferRequiredFields = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicyCost
     */
    protected $CancellationPolicyCost = null;

    /**
     * @var JP_PriceInformationTransfer $PriceInformation
     */
    protected $PriceInformation = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @var int $OriginZone
     */
    protected $OriginZone = null;

    /**
     * @var int $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param JP_AvailStatus $Status
     * @param date $Start
     * @param date $End
     * @param int $OriginZone
     * @param int $DestinationZone
     * @param string $Code
     */
    public function __construct($Status, $Start, $End, $OriginZone, $DestinationZone, $Code)
    {
      $this->Status = $Status;
      $this->Start = $Start;
      $this->End = $End;
      $this->OriginZone = $OriginZone;
      $this->DestinationZone = $DestinationZone;
      $this->Code = $Code;
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
     * @return JP_TransferBookingRules
     */
    public function setBookingCode($BookingCode)
    {
      $this->BookingCode = $BookingCode;
      return $this;
    }

    /**
     * @return JP_TransferRequiredFields
     */
    public function getTransferRequiredFields()
    {
      return $this->TransferRequiredFields;
    }

    /**
     * @param JP_TransferRequiredFields $TransferRequiredFields
     * @return JP_TransferBookingRules
     */
    public function setTransferRequiredFields($TransferRequiredFields)
    {
      $this->TransferRequiredFields = $TransferRequiredFields;
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
     * @return JP_TransferBookingRules
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
     * @return JP_TransferBookingRules
     */
    public function setCancellationPolicyCost($CancellationPolicyCost)
    {
      $this->CancellationPolicyCost = $CancellationPolicyCost;
      return $this;
    }

    /**
     * @return JP_PriceInformationTransfer
     */
    public function getPriceInformation()
    {
      return $this->PriceInformation;
    }

    /**
     * @param JP_PriceInformationTransfer $PriceInformation
     * @return JP_TransferBookingRules
     */
    public function setPriceInformation($PriceInformation)
    {
      $this->PriceInformation = $PriceInformation;
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
     * @return JP_TransferBookingRules
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return date
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param date $Start
     * @return JP_TransferBookingRules
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return JP_TransferBookingRules
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return int
     */
    public function getOriginZone()
    {
      return $this->OriginZone;
    }

    /**
     * @param int $OriginZone
     * @return JP_TransferBookingRules
     */
    public function setOriginZone($OriginZone)
    {
      $this->OriginZone = $OriginZone;
      return $this;
    }

    /**
     * @return int
     */
    public function getDestinationZone()
    {
      return $this->DestinationZone;
    }

    /**
     * @param int $DestinationZone
     * @return JP_TransferBookingRules
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_TransferBookingRules
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

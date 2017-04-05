<?php

namespace Juniper\Webservice;

class JP_TransferResult
{

    /**
     * @var JP_TransferInfo $TransferInfo
     */
    protected $TransferInfo = null;

    /**
     * @var ArrayOfJP_TransferOption $TransferOptions
     */
    protected $TransferOptions = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var ArrayOfJP_Origin $Origins
     */
    protected $Origins = null;

    /**
     * @var ArrayOfJP_Destination $Destinations
     */
    protected $Destinations = null;

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
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param date $Start
     * @param date $End
     * @param int $OriginZone
     * @param int $DestinationZone
     * @param string $Code
     * @param JP_AvailStatus $Status
     * @param string $RatePlanCode
     */
    public function __construct($Start, $End, $OriginZone, $DestinationZone, $Code, $Status, $RatePlanCode)
    {
      $this->Start = $Start;
      $this->End = $End;
      $this->OriginZone = $OriginZone;
      $this->DestinationZone = $DestinationZone;
      $this->Code = $Code;
      $this->Status = $Status;
      $this->RatePlanCode = $RatePlanCode;
    }

    /**
     * @return JP_TransferInfo
     */
    public function getTransferInfo()
    {
      return $this->TransferInfo;
    }

    /**
     * @param JP_TransferInfo $TransferInfo
     * @return JP_TransferResult
     */
    public function setTransferInfo($TransferInfo)
    {
      $this->TransferInfo = $TransferInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_TransferOption
     */
    public function getTransferOptions()
    {
      return $this->TransferOptions;
    }

    /**
     * @param ArrayOfJP_TransferOption $TransferOptions
     * @return JP_TransferResult
     */
    public function setTransferOptions($TransferOptions)
    {
      $this->TransferOptions = $TransferOptions;
      return $this;
    }

    /**
     * @return ArrayOfJP_Price
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfJP_Price $Prices
     * @return JP_TransferResult
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return ArrayOfJP_Origin
     */
    public function getOrigins()
    {
      return $this->Origins;
    }

    /**
     * @param ArrayOfJP_Origin $Origins
     * @return JP_TransferResult
     */
    public function setOrigins($Origins)
    {
      $this->Origins = $Origins;
      return $this;
    }

    /**
     * @return ArrayOfJP_Destination
     */
    public function getDestinations()
    {
      return $this->Destinations;
    }

    /**
     * @param ArrayOfJP_Destination $Destinations
     * @return JP_TransferResult
     */
    public function setDestinations($Destinations)
    {
      $this->Destinations = $Destinations;
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
     * @return JP_TransferResult
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
     * @return JP_TransferResult
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
     * @return JP_TransferResult
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
     * @return JP_TransferResult
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
     * @return JP_TransferResult
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return JP_TransferResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return JP_TransferResult
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}

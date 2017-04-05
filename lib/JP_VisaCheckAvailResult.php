<?php

namespace Juniper\Webservice;

class JP_VisaCheckAvailResult
{

    /**
     * @var JP_VisaInfo $VisaInfo
     */
    protected $VisaInfo = null;

    /**
     * @var ArrayOfJP_VisaOption $VisaOptions
     */
    protected $VisaOptions = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

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
     * @param date $Start
     * @param date $End
     * @param int $DestinationZone
     * @param string $Code
     * @param JP_AvailStatus $Status
     */
    public function __construct($Start, $End, $DestinationZone, $Code, $Status)
    {
      $this->Start = $Start;
      $this->End = $End;
      $this->DestinationZone = $DestinationZone;
      $this->Code = $Code;
      $this->Status = $Status;
    }

    /**
     * @return JP_VisaInfo
     */
    public function getVisaInfo()
    {
      return $this->VisaInfo;
    }

    /**
     * @param JP_VisaInfo $VisaInfo
     * @return JP_VisaCheckAvailResult
     */
    public function setVisaInfo($VisaInfo)
    {
      $this->VisaInfo = $VisaInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_VisaOption
     */
    public function getVisaOptions()
    {
      return $this->VisaOptions;
    }

    /**
     * @param ArrayOfJP_VisaOption $VisaOptions
     * @return JP_VisaCheckAvailResult
     */
    public function setVisaOptions($VisaOptions)
    {
      $this->VisaOptions = $VisaOptions;
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
     * @return JP_VisaCheckAvailResult
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
     * @return JP_VisaCheckAvailResult
     */
    public function setEnd($End)
    {
      $this->End = $End;
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
     * @return JP_VisaCheckAvailResult
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
     * @return JP_VisaCheckAvailResult
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
     * @return JP_VisaCheckAvailResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}

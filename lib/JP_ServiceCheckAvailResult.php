<?php

namespace Juniper\Webservice;

class JP_ServiceCheckAvailResult
{

    /**
     * @var JP_ServiceInfo $ServiceInfo
     */
    protected $ServiceInfo = null;

    /**
     * @var ArrayOfJP_ServiceOption $ServiceOptions
     */
    protected $ServiceOptions = null;

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
     * @return JP_ServiceInfo
     */
    public function getServiceInfo()
    {
      return $this->ServiceInfo;
    }

    /**
     * @param JP_ServiceInfo $ServiceInfo
     * @return JP_ServiceCheckAvailResult
     */
    public function setServiceInfo($ServiceInfo)
    {
      $this->ServiceInfo = $ServiceInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceOption
     */
    public function getServiceOptions()
    {
      return $this->ServiceOptions;
    }

    /**
     * @param ArrayOfJP_ServiceOption $ServiceOptions
     * @return JP_ServiceCheckAvailResult
     */
    public function setServiceOptions($ServiceOptions)
    {
      $this->ServiceOptions = $ServiceOptions;
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
     * @return JP_ServiceCheckAvailResult
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
     * @return JP_ServiceCheckAvailResult
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
     * @return JP_ServiceCheckAvailResult
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
     * @return JP_ServiceCheckAvailResult
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
     * @return JP_ServiceCheckAvailResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}

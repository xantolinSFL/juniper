<?php

namespace Juniper\Webservice;

abstract class JP_SearchSegmentBase
{

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
     * @var string $JPDCode
     */
    protected $JPDCode = null;

    /**
     * @var int $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @param date $Start
     * @param date $End
     * @param int $OriginZone
     * @param string $JPDCode
     * @param int $DestinationZone
     */
    public function __construct($Start, $End, $OriginZone, $JPDCode, $DestinationZone)
    {
      $this->Start = $Start;
      $this->End = $End;
      $this->OriginZone = $OriginZone;
      $this->JPDCode = $JPDCode;
      $this->DestinationZone = $DestinationZone;
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
     * @return JP_SearchSegmentBase
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
     * @return JP_SearchSegmentBase
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
     * @return JP_SearchSegmentBase
     */
    public function setOriginZone($OriginZone)
    {
      $this->OriginZone = $OriginZone;
      return $this;
    }

    /**
     * @return string
     */
    public function getJPDCode()
    {
      return $this->JPDCode;
    }

    /**
     * @param string $JPDCode
     * @return JP_SearchSegmentBase
     */
    public function setJPDCode($JPDCode)
    {
      $this->JPDCode = $JPDCode;
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
     * @return JP_SearchSegmentBase
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
      return $this;
    }

}

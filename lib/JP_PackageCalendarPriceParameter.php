<?php

class JP_PackageCalendarPriceParameter
{

    /**
     * @var ArrayOfJP_PackagesCodeList $PackageCodes
     */
    protected $PackageCodes = null;

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
     * @param date $Start
     * @param date $End
     * @param int $OriginZone
     * @param int $DestinationZone
     */
    public function __construct($Start, $End, $OriginZone, $DestinationZone)
    {
      $this->Start = $Start;
      $this->End = $End;
      $this->OriginZone = $OriginZone;
      $this->DestinationZone = $DestinationZone;
    }

    /**
     * @return ArrayOfJP_PackagesCodeList
     */
    public function getPackageCodes()
    {
      return $this->PackageCodes;
    }

    /**
     * @param ArrayOfJP_PackagesCodeList $PackageCodes
     * @return JP_PackageCalendarPriceParameter
     */
    public function setPackageCodes($PackageCodes)
    {
      $this->PackageCodes = $PackageCodes;
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
     * @return JP_PackageCalendarPriceParameter
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
     * @return JP_PackageCalendarPriceParameter
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
     * @return JP_PackageCalendarPriceParameter
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
     * @return JP_PackageCalendarPriceParameter
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
      return $this;
    }

}

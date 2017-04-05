<?php

namespace Juniper\Webservice;

class JP_TransferOption
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfString1 $Images
     */
    protected $Images = null;

    /**
     * @var string $OriginName
     */
    protected $OriginName = null;

    /**
     * @var string $DestinationName
     */
    protected $DestinationName = null;

    /**
     * @var ArrayOfJP_ServiceDate $Dates
     */
    protected $Dates = null;

    /**
     * @var JP_TransferBookingInfo $TransferBookingInfo
     */
    protected $TransferBookingInfo = null;

    /**
     * @var \DateTime $Start
     */
    protected $Start = null;

    /**
     * @var \DateTime $End
     */
    protected $End = null;

    /**
     * @var int $Origin
     */
    protected $Origin = null;

    /**
     * @var string $OriginType
     */
    protected $OriginType = null;

    /**
     * @var int $Destination
     */
    protected $Destination = null;

    /**
     * @var string $DestinationType
     */
    protected $DestinationType = null;

    /**
     * @var duration $Duration
     */
    protected $Duration = null;

    /**
     * @var JP_RouteType $Route
     */
    protected $Route = null;

    /**
     * @param \DateTime $Start
     * @param \DateTime $End
     * @param int $Origin
     * @param string $OriginType
     * @param int $Destination
     * @param string $DestinationType
     * @param duration $Duration
     * @param JP_RouteType $Route
     */
    public function __construct(\DateTime $Start, \DateTime $End, $Origin, $OriginType, $Destination, $DestinationType, $Duration, $Route)
    {
      $this->Start = $Start->format(\DateTime::ATOM);
      $this->End = $End->format(\DateTime::ATOM);
      $this->Origin = $Origin;
      $this->OriginType = $OriginType;
      $this->Destination = $Destination;
      $this->DestinationType = $DestinationType;
      $this->Duration = $Duration;
      $this->Route = $Route;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_TransferOption
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_TransferOption
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfString1
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfString1 $Images
     * @return JP_TransferOption
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginName()
    {
      return $this->OriginName;
    }

    /**
     * @param string $OriginName
     * @return JP_TransferOption
     */
    public function setOriginName($OriginName)
    {
      $this->OriginName = $OriginName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationName()
    {
      return $this->DestinationName;
    }

    /**
     * @param string $DestinationName
     * @return JP_TransferOption
     */
    public function setDestinationName($DestinationName)
    {
      $this->DestinationName = $DestinationName;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceDate
     */
    public function getDates()
    {
      return $this->Dates;
    }

    /**
     * @param ArrayOfJP_ServiceDate $Dates
     * @return JP_TransferOption
     */
    public function setDates($Dates)
    {
      $this->Dates = $Dates;
      return $this;
    }

    /**
     * @return JP_TransferBookingInfo
     */
    public function getTransferBookingInfo()
    {
      return $this->TransferBookingInfo;
    }

    /**
     * @param JP_TransferBookingInfo $TransferBookingInfo
     * @return JP_TransferOption
     */
    public function setTransferBookingInfo($TransferBookingInfo)
    {
      $this->TransferBookingInfo = $TransferBookingInfo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
      if ($this->Start == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Start);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Start
     * @return JP_TransferOption
     */
    public function setStart(\DateTime $Start)
    {
      $this->Start = $Start->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
      if ($this->End == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->End);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $End
     * @return JP_TransferOption
     */
    public function setEnd(\DateTime $End)
    {
      $this->End = $End->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param int $Origin
     * @return JP_TransferOption
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginType()
    {
      return $this->OriginType;
    }

    /**
     * @param string $OriginType
     * @return JP_TransferOption
     */
    public function setOriginType($OriginType)
    {
      $this->OriginType = $OriginType;
      return $this;
    }

    /**
     * @return int
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param int $Destination
     * @return JP_TransferOption
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationType()
    {
      return $this->DestinationType;
    }

    /**
     * @param string $DestinationType
     * @return JP_TransferOption
     */
    public function setDestinationType($DestinationType)
    {
      $this->DestinationType = $DestinationType;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param duration $Duration
     * @return JP_TransferOption
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

    /**
     * @return JP_RouteType
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param JP_RouteType $Route
     * @return JP_TransferOption
     */
    public function setRoute($Route)
    {
      $this->Route = $Route;
      return $this;
    }

}

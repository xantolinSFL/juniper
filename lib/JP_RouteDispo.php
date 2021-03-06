<?php

namespace Juniper\Webservice;

class JP_RouteDispo
{

    /**
     * @var int $Origin
     */
    protected $Origin = null;

    /**
     * @var int $Destination
     */
    protected $Destination = null;

    /**
     * @var string $OriginIATA
     */
    protected $OriginIATA = null;

    /**
     * @var string $DestinationIATA
     */
    protected $DestinationIATA = null;

    /**
     * @var date $Date
     */
    protected $Date = null;

    /**
     * @param int $Origin
     * @param int $Destination
     * @param string $OriginIATA
     * @param string $DestinationIATA
     * @param date $Date
     */
    public function __construct($Origin, $Destination, $OriginIATA, $DestinationIATA, $Date)
    {
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->OriginIATA = $OriginIATA;
      $this->DestinationIATA = $DestinationIATA;
      $this->Date = $Date;
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
     * @return JP_RouteDispo
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
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
     * @return JP_RouteDispo
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginIATA()
    {
      return $this->OriginIATA;
    }

    /**
     * @param string $OriginIATA
     * @return JP_RouteDispo
     */
    public function setOriginIATA($OriginIATA)
    {
      $this->OriginIATA = $OriginIATA;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationIATA()
    {
      return $this->DestinationIATA;
    }

    /**
     * @param string $DestinationIATA
     * @return JP_RouteDispo
     */
    public function setDestinationIATA($DestinationIATA)
    {
      $this->DestinationIATA = $DestinationIATA;
      return $this;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param date $Date
     * @return JP_RouteDispo
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

}

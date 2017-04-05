<?php

namespace Juniper\Webservice;

class JP_FutureRatesResultInfo
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
     * @var string $DestinationZone
     */
    protected $DestinationZone = null;

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var JP_Paxes $Paxes
     */
    protected $Paxes = null;

    /**
     * @param date $Start
     * @param date $End
     */
    public function __construct($Start, $End)
    {
      $this->Start = $Start;
      $this->End = $End;
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
     * @return JP_FutureRatesResultInfo
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
     * @return JP_FutureRatesResultInfo
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationZone()
    {
      return $this->DestinationZone;
    }

    /**
     * @param string $DestinationZone
     * @return JP_FutureRatesResultInfo
     */
    public function setDestinationZone($DestinationZone)
    {
      $this->DestinationZone = $DestinationZone;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return JP_FutureRatesResultInfo
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return JP_Paxes
     */
    public function getPaxes()
    {
      return $this->Paxes;
    }

    /**
     * @param JP_Paxes $Paxes
     * @return JP_FutureRatesResultInfo
     */
    public function setPaxes($Paxes)
    {
      $this->Paxes = $Paxes;
      return $this;
    }

}

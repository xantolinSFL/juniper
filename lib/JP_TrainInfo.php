<?php

class JP_TrainInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JP_StationInfo $StationInfo
     */
    protected $StationInfo = null;

    
    public function __construct()
    {
    
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
     * @return JP_TrainInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return JP_StationInfo
     */
    public function getStationInfo()
    {
      return $this->StationInfo;
    }

    /**
     * @param JP_StationInfo $StationInfo
     * @return JP_TrainInfo
     */
    public function setStationInfo($StationInfo)
    {
      $this->StationInfo = $StationInfo;
      return $this;
    }

}

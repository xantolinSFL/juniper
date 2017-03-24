<?php

class JP_PointOfInterest
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Distance
     */
    protected $Distance = null;

    
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
     * @return JP_PointOfInterest
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param string $Distance
     * @return JP_PointOfInterest
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

}

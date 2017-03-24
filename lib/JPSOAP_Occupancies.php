<?php

class JPSOAP_Occupancies
{

    /**
     * @var JPSOAP_Occupancy[] $Occupancy
     */
    protected $Occupancy = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_Occupancy[]
     */
    public function getOccupancy()
    {
      return $this->Occupancy;
    }

    /**
     * @param JPSOAP_Occupancy[] $Occupancy
     * @return JPSOAP_Occupancies
     */
    public function setOccupancy(array $Occupancy = null)
    {
      $this->Occupancy = $Occupancy;
      return $this;
    }

}

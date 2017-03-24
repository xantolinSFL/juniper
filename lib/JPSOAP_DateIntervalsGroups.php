<?php

class JPSOAP_DateIntervalsGroups
{

    /**
     * @var JPSOAP_DateIntervals[] $Date
     */
    protected $Date = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_DateIntervals[]
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param JPSOAP_DateIntervals[] $Date
     * @return JPSOAP_DateIntervalsGroups
     */
    public function setDate(array $Date = null)
    {
      $this->Date = $Date;
      return $this;
    }

}

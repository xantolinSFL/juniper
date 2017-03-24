<?php

class JP_CruiseList
{

    /**
     * @var JP_CruiseResult $Cruise
     */
    protected $Cruise = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseResult
     */
    public function getCruise()
    {
      return $this->Cruise;
    }

    /**
     * @param JP_CruiseResult $Cruise
     * @return JP_CruiseList
     */
    public function setCruise($Cruise)
    {
      $this->Cruise = $Cruise;
      return $this;
    }

}

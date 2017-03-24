<?php

class JP_CruiseShipRequest
{

    /**
     * @var JP_SearchSegmentsShip $SearchSegmentsShip
     */
    protected $SearchSegmentsShip = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentsShip
     */
    public function getSearchSegmentsShip()
    {
      return $this->SearchSegmentsShip;
    }

    /**
     * @param JP_SearchSegmentsShip $SearchSegmentsShip
     * @return JP_CruiseShipRequest
     */
    public function setSearchSegmentsShip($SearchSegmentsShip)
    {
      $this->SearchSegmentsShip = $SearchSegmentsShip;
      return $this;
    }

}

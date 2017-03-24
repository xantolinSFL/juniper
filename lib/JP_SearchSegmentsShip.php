<?php

class JP_SearchSegmentsShip
{

    /**
     * @var JP_SearchSegmentShip $SearchSegmentShip
     */
    protected $SearchSegmentShip = null;

    /**
     * @var ArrayOfJP_CruiseSupplier $CruiseSuppliers
     */
    protected $CruiseSuppliers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentShip
     */
    public function getSearchSegmentShip()
    {
      return $this->SearchSegmentShip;
    }

    /**
     * @param JP_SearchSegmentShip $SearchSegmentShip
     * @return JP_SearchSegmentsShip
     */
    public function setSearchSegmentShip($SearchSegmentShip)
    {
      $this->SearchSegmentShip = $SearchSegmentShip;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruiseSupplier
     */
    public function getCruiseSuppliers()
    {
      return $this->CruiseSuppliers;
    }

    /**
     * @param ArrayOfJP_CruiseSupplier $CruiseSuppliers
     * @return JP_SearchSegmentsShip
     */
    public function setCruiseSuppliers($CruiseSuppliers)
    {
      $this->CruiseSuppliers = $CruiseSuppliers;
      return $this;
    }

}

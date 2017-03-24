<?php

class JP_SearchSegmentsCruise
{

    /**
     * @var JP_SearchSegmentCruise $SearchSegmentCruise
     */
    protected $SearchSegmentCruise = null;

    /**
     * @var ArrayOfJP_CruiseSupplier $CruiseSuppliers
     */
    protected $CruiseSuppliers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentCruise
     */
    public function getSearchSegmentCruise()
    {
      return $this->SearchSegmentCruise;
    }

    /**
     * @param JP_SearchSegmentCruise $SearchSegmentCruise
     * @return JP_SearchSegmentsCruise
     */
    public function setSearchSegmentCruise($SearchSegmentCruise)
    {
      $this->SearchSegmentCruise = $SearchSegmentCruise;
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
     * @return JP_SearchSegmentsCruise
     */
    public function setCruiseSuppliers($CruiseSuppliers)
    {
      $this->CruiseSuppliers = $CruiseSuppliers;
      return $this;
    }

}

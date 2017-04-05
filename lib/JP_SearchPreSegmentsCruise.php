<?php

namespace Juniper\Webservice;

class JP_SearchPreSegmentsCruise
{

    /**
     * @var JP_SearchPreSegmentCruise $SearchSegmentCruise
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
     * @return JP_SearchPreSegmentCruise
     */
    public function getSearchSegmentCruise()
    {
      return $this->SearchSegmentCruise;
    }

    /**
     * @param JP_SearchPreSegmentCruise $SearchSegmentCruise
     * @return JP_SearchPreSegmentsCruise
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
     * @return JP_SearchPreSegmentsCruise
     */
    public function setCruiseSuppliers($CruiseSuppliers)
    {
      $this->CruiseSuppliers = $CruiseSuppliers;
      return $this;
    }

}

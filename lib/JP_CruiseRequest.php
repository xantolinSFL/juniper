<?php

namespace Juniper\Webservice;

class JP_CruiseRequest
{

    /**
     * @var JP_CruiseSearch $CruiseSearch
     */
    protected $CruiseSearch = null;

    /**
     * @var JP_SearchSegmentsCruise $SearchSegmentsCruise
     */
    protected $SearchSegmentsCruise = null;

    /**
     * @var ArrayOfJP_RelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseSearch
     */
    public function getCruiseSearch()
    {
      return $this->CruiseSearch;
    }

    /**
     * @param JP_CruiseSearch $CruiseSearch
     * @return JP_CruiseRequest
     */
    public function setCruiseSearch($CruiseSearch)
    {
      $this->CruiseSearch = $CruiseSearch;
      return $this;
    }

    /**
     * @return JP_SearchSegmentsCruise
     */
    public function getSearchSegmentsCruise()
    {
      return $this->SearchSegmentsCruise;
    }

    /**
     * @param JP_SearchSegmentsCruise $SearchSegmentsCruise
     * @return JP_CruiseRequest
     */
    public function setSearchSegmentsCruise($SearchSegmentsCruise)
    {
      $this->SearchSegmentsCruise = $SearchSegmentsCruise;
      return $this;
    }

    /**
     * @return ArrayOfJP_RelPaxDist
     */
    public function getRelPaxesDist()
    {
      return $this->RelPaxesDist;
    }

    /**
     * @param ArrayOfJP_RelPaxDist $RelPaxesDist
     * @return JP_CruiseRequest
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}

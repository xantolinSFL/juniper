<?php

namespace Juniper\Webservice;

class JP_CruisePreRequest
{

    /**
     * @var JP_SearchPreSegmentsCruise $SearchSegmentsCruise
     */
    protected $SearchSegmentsCruise = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchPreSegmentsCruise
     */
    public function getSearchSegmentsCruise()
    {
      return $this->SearchSegmentsCruise;
    }

    /**
     * @param JP_SearchPreSegmentsCruise $SearchSegmentsCruise
     * @return JP_CruisePreRequest
     */
    public function setSearchSegmentsCruise($SearchSegmentsCruise)
    {
      $this->SearchSegmentsCruise = $SearchSegmentsCruise;
      return $this;
    }

}

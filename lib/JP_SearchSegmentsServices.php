<?php

class JP_SearchSegmentsServices
{

    /**
     * @var JP_SearchSegmentServices $SearchSegmenServices
     */
    protected $SearchSegmenServices = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentServices
     */
    public function getSearchSegmenServices()
    {
      return $this->SearchSegmenServices;
    }

    /**
     * @param JP_SearchSegmentServices $SearchSegmenServices
     * @return JP_SearchSegmentsServices
     */
    public function setSearchSegmenServices($SearchSegmenServices)
    {
      $this->SearchSegmenServices = $SearchSegmenServices;
      return $this;
    }

}

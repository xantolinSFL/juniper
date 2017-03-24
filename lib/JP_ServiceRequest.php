<?php

class JP_ServiceRequest
{

    /**
     * @var JP_SearchSegmentsServices $SearchSegmentsServices
     */
    protected $SearchSegmentsServices = null;

    /**
     * @var ArrayOfJP_RelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentsServices
     */
    public function getSearchSegmentsServices()
    {
      return $this->SearchSegmentsServices;
    }

    /**
     * @param JP_SearchSegmentsServices $SearchSegmentsServices
     * @return JP_ServiceRequest
     */
    public function setSearchSegmentsServices($SearchSegmentsServices)
    {
      $this->SearchSegmentsServices = $SearchSegmentsServices;
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
     * @return JP_ServiceRequest
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}

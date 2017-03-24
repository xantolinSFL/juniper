<?php

class JP_VisaRequest
{

    /**
     * @var JP_SearchSegmentsVisa $SearchSegmentsVisa
     */
    protected $SearchSegmentsVisa = null;

    /**
     * @var ArrayOfJP_RelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentsVisa
     */
    public function getSearchSegmentsVisa()
    {
      return $this->SearchSegmentsVisa;
    }

    /**
     * @param JP_SearchSegmentsVisa $SearchSegmentsVisa
     * @return JP_VisaRequest
     */
    public function setSearchSegmentsVisa($SearchSegmentsVisa)
    {
      $this->SearchSegmentsVisa = $SearchSegmentsVisa;
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
     * @return JP_VisaRequest
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}

<?php

class JP_SearchSegmentsVisa
{

    /**
     * @var JP_SearchSegmentVisa $SearchSegmenVisa
     */
    protected $SearchSegmenVisa = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentVisa
     */
    public function getSearchSegmenVisa()
    {
      return $this->SearchSegmenVisa;
    }

    /**
     * @param JP_SearchSegmentVisa $SearchSegmenVisa
     * @return JP_SearchSegmentsVisa
     */
    public function setSearchSegmenVisa($SearchSegmenVisa)
    {
      $this->SearchSegmenVisa = $SearchSegmenVisa;
      return $this;
    }

}

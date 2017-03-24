<?php

class JP_SearchSegmentsPackages
{

    /**
     * @var JP_SearchSegmentPackages $SearchSegmentPackages
     */
    protected $SearchSegmentPackages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentPackages
     */
    public function getSearchSegmentPackages()
    {
      return $this->SearchSegmentPackages;
    }

    /**
     * @param JP_SearchSegmentPackages $SearchSegmentPackages
     * @return JP_SearchSegmentsPackages
     */
    public function setSearchSegmentPackages($SearchSegmentPackages)
    {
      $this->SearchSegmentPackages = $SearchSegmentPackages;
      return $this;
    }

}

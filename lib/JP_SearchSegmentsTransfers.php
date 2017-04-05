<?php

namespace Juniper\Webservice;

class JP_SearchSegmentsTransfers
{

    /**
     * @var JP_SearchSegmentTransfers $SearchSegmenTransfers
     */
    protected $SearchSegmenTransfers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentTransfers
     */
    public function getSearchSegmenTransfers()
    {
      return $this->SearchSegmenTransfers;
    }

    /**
     * @param JP_SearchSegmentTransfers $SearchSegmenTransfers
     * @return JP_SearchSegmentsTransfers
     */
    public function setSearchSegmenTransfers($SearchSegmenTransfers)
    {
      $this->SearchSegmenTransfers = $SearchSegmenTransfers;
      return $this;
    }

}

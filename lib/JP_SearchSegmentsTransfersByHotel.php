<?php

class JP_SearchSegmentsTransfersByHotel
{

    /**
     * @var JP_SearchSegmentTransfersByHotel $SearchSegmenTransfers
     */
    protected $SearchSegmenTransfers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentTransfersByHotel
     */
    public function getSearchSegmenTransfers()
    {
      return $this->SearchSegmenTransfers;
    }

    /**
     * @param JP_SearchSegmentTransfersByHotel $SearchSegmenTransfers
     * @return JP_SearchSegmentsTransfersByHotel
     */
    public function setSearchSegmenTransfers($SearchSegmenTransfers)
    {
      $this->SearchSegmenTransfers = $SearchSegmenTransfers;
      return $this;
    }

}

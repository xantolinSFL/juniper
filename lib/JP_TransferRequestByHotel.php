<?php

namespace Juniper\Webservice;

class JP_TransferRequestByHotel
{

    /**
     * @var JP_SearchSegmentsTransfersByHotel $SearchSegmentsTransfers
     */
    protected $SearchSegmentsTransfers = null;

    /**
     * @var ArrayOfJP_RelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentsTransfersByHotel
     */
    public function getSearchSegmentsTransfers()
    {
      return $this->SearchSegmentsTransfers;
    }

    /**
     * @param JP_SearchSegmentsTransfersByHotel $SearchSegmentsTransfers
     * @return JP_TransferRequestByHotel
     */
    public function setSearchSegmentsTransfers($SearchSegmentsTransfers)
    {
      $this->SearchSegmentsTransfers = $SearchSegmentsTransfers;
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
     * @return JP_TransferRequestByHotel
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}

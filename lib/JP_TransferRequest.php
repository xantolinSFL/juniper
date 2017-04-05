<?php

namespace Juniper\Webservice;

class JP_TransferRequest
{

    /**
     * @var JP_SearchSegmentsTransfers $SearchSegmentsTransfers
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
     * @return JP_SearchSegmentsTransfers
     */
    public function getSearchSegmentsTransfers()
    {
      return $this->SearchSegmentsTransfers;
    }

    /**
     * @param JP_SearchSegmentsTransfers $SearchSegmentsTransfers
     * @return JP_TransferRequest
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
     * @return JP_TransferRequest
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}

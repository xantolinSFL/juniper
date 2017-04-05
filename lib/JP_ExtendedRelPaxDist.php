<?php

namespace Juniper\Webservice;

class JP_ExtendedRelPaxDist
{

    /**
     * @var ArrayOfJP_ExtendedRelPax $RelPaxes
     */
    protected $RelPaxes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_ExtendedRelPax
     */
    public function getRelPaxes()
    {
      return $this->RelPaxes;
    }

    /**
     * @param ArrayOfJP_ExtendedRelPax $RelPaxes
     * @return JP_ExtendedRelPaxDist
     */
    public function setRelPaxes($RelPaxes)
    {
      $this->RelPaxes = $RelPaxes;
      return $this;
    }

}

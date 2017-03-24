<?php

class JP_RelPaxesDist
{

    /**
     * @var JP_RelPaxDist[] $RelPaxDist
     */
    protected $RelPaxDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RelPaxDist[]
     */
    public function getRelPaxDist()
    {
      return $this->RelPaxDist;
    }

    /**
     * @param JP_RelPaxDist[] $RelPaxDist
     * @return JP_RelPaxesDist
     */
    public function setRelPaxDist(array $RelPaxDist = null)
    {
      $this->RelPaxDist = $RelPaxDist;
      return $this;
    }

}

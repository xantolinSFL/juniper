<?php

class JP_PackageRequest
{

    /**
     * @var JP_SearchSegmentsPackages $SearchSegmentsPackages
     */
    protected $SearchSegmentsPackages = null;

    /**
     * @var ArrayOfJP_RelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param string $RatePlanCode
     */
    public function __construct($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
    }

    /**
     * @return JP_SearchSegmentsPackages
     */
    public function getSearchSegmentsPackages()
    {
      return $this->SearchSegmentsPackages;
    }

    /**
     * @param JP_SearchSegmentsPackages $SearchSegmentsPackages
     * @return JP_PackageRequest
     */
    public function setSearchSegmentsPackages($SearchSegmentsPackages)
    {
      $this->SearchSegmentsPackages = $SearchSegmentsPackages;
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
     * @return JP_PackageRequest
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return JP_PackageRequest
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}

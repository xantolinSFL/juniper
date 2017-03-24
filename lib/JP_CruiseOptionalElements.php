<?php

class JP_CruiseOptionalElements
{

    /**
     * @var ArrayOfJP_CruiseSupplement $CruiseSupplements
     */
    protected $CruiseSupplements = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_CruiseSupplement
     */
    public function getCruiseSupplements()
    {
      return $this->CruiseSupplements;
    }

    /**
     * @param ArrayOfJP_CruiseSupplement $CruiseSupplements
     * @return JP_CruiseOptionalElements
     */
    public function setCruiseSupplements($CruiseSupplements)
    {
      $this->CruiseSupplements = $CruiseSupplements;
      return $this;
    }

}

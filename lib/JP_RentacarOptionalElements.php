<?php

class JP_RentacarOptionalElements
{

    /**
     * @var ArrayOfJP_CarSupplement $CarSupplements
     */
    protected $CarSupplements = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_CarSupplement
     */
    public function getCarSupplements()
    {
      return $this->CarSupplements;
    }

    /**
     * @param ArrayOfJP_CarSupplement $CarSupplements
     * @return JP_RentacarOptionalElements
     */
    public function setCarSupplements($CarSupplements)
    {
      $this->CarSupplements = $CarSupplements;
      return $this;
    }

}

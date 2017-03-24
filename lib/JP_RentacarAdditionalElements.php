<?php

class JP_RentacarAdditionalElements
{

    /**
     * @var ArrayOfJP_CarSupplement $CarSupplements
     */
    protected $CarSupplements = null;

    /**
     * @var ArrayOfJP_CarFee $CarFees
     */
    protected $CarFees = null;

    
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
     * @return JP_RentacarAdditionalElements
     */
    public function setCarSupplements($CarSupplements)
    {
      $this->CarSupplements = $CarSupplements;
      return $this;
    }

    /**
     * @return ArrayOfJP_CarFee
     */
    public function getCarFees()
    {
      return $this->CarFees;
    }

    /**
     * @param ArrayOfJP_CarFee $CarFees
     * @return JP_RentacarAdditionalElements
     */
    public function setCarFees($CarFees)
    {
      $this->CarFees = $CarFees;
      return $this;
    }

}

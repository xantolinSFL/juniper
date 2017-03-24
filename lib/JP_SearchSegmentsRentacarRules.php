<?php

class JP_SearchSegmentsRentacarRules
{

    /**
     * @var JP_SearchSegmentRentacarRules $SearchSegmentRentacar
     */
    protected $SearchSegmentRentacar = null;

    /**
     * @var ArrayOfJP_RentacarSupplier $RentacarSuppliers
     */
    protected $RentacarSuppliers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentRentacarRules
     */
    public function getSearchSegmentRentacar()
    {
      return $this->SearchSegmentRentacar;
    }

    /**
     * @param JP_SearchSegmentRentacarRules $SearchSegmentRentacar
     * @return JP_SearchSegmentsRentacarRules
     */
    public function setSearchSegmentRentacar($SearchSegmentRentacar)
    {
      $this->SearchSegmentRentacar = $SearchSegmentRentacar;
      return $this;
    }

    /**
     * @return ArrayOfJP_RentacarSupplier
     */
    public function getRentacarSuppliers()
    {
      return $this->RentacarSuppliers;
    }

    /**
     * @param ArrayOfJP_RentacarSupplier $RentacarSuppliers
     * @return JP_SearchSegmentsRentacarRules
     */
    public function setRentacarSuppliers($RentacarSuppliers)
    {
      $this->RentacarSuppliers = $RentacarSuppliers;
      return $this;
    }

}

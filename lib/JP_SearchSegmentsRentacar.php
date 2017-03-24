<?php

class JP_SearchSegmentsRentacar
{

    /**
     * @var JP_SearchSegmentRentacar $SearchSegmentRentacar
     */
    protected $SearchSegmentRentacar = null;

    /**
     * @var ArrayOfJP_RentacarSupplier $RentacarSuppliers
     */
    protected $RentacarSuppliers = null;

    /**
     * @var ArrayOfJP_RentacarLocation $RentacarLocations
     */
    protected $RentacarLocations = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentRentacar
     */
    public function getSearchSegmentRentacar()
    {
      return $this->SearchSegmentRentacar;
    }

    /**
     * @param JP_SearchSegmentRentacar $SearchSegmentRentacar
     * @return JP_SearchSegmentsRentacar
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
     * @return JP_SearchSegmentsRentacar
     */
    public function setRentacarSuppliers($RentacarSuppliers)
    {
      $this->RentacarSuppliers = $RentacarSuppliers;
      return $this;
    }

    /**
     * @return ArrayOfJP_RentacarLocation
     */
    public function getRentacarLocations()
    {
      return $this->RentacarLocations;
    }

    /**
     * @param ArrayOfJP_RentacarLocation $RentacarLocations
     * @return JP_SearchSegmentsRentacar
     */
    public function setRentacarLocations($RentacarLocations)
    {
      $this->RentacarLocations = $RentacarLocations;
      return $this;
    }

}

<?php

class JP_RentacarRequest
{

    /**
     * @var JP_SearchSegmentsRentacar $SearchSegmentsRentacar
     */
    protected $SearchSegmentsRentacar = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SearchSegmentsRentacar
     */
    public function getSearchSegmentsRentacar()
    {
      return $this->SearchSegmentsRentacar;
    }

    /**
     * @param JP_SearchSegmentsRentacar $SearchSegmentsRentacar
     * @return JP_RentacarRequest
     */
    public function setSearchSegmentsRentacar($SearchSegmentsRentacar)
    {
      $this->SearchSegmentsRentacar = $SearchSegmentsRentacar;
      return $this;
    }

}

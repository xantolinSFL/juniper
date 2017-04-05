<?php

namespace Juniper\Webservice;

class JP_RentacarBookingRulesRequest
{

    /**
     * @var JP_RentacarRequestBookingRulesOption $RentacarOption
     */
    protected $RentacarOption = null;

    /**
     * @var JP_SearchSegmentsRentacarRules $SearchSegmentsRentacar
     */
    protected $SearchSegmentsRentacar = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RentacarRequestBookingRulesOption
     */
    public function getRentacarOption()
    {
      return $this->RentacarOption;
    }

    /**
     * @param JP_RentacarRequestBookingRulesOption $RentacarOption
     * @return JP_RentacarBookingRulesRequest
     */
    public function setRentacarOption($RentacarOption)
    {
      $this->RentacarOption = $RentacarOption;
      return $this;
    }

    /**
     * @return JP_SearchSegmentsRentacarRules
     */
    public function getSearchSegmentsRentacar()
    {
      return $this->SearchSegmentsRentacar;
    }

    /**
     * @param JP_SearchSegmentsRentacarRules $SearchSegmentsRentacar
     * @return JP_RentacarBookingRulesRequest
     */
    public function setSearchSegmentsRentacar($SearchSegmentsRentacar)
    {
      $this->SearchSegmentsRentacar = $SearchSegmentsRentacar;
      return $this;
    }

}

<?php

class JP_RentacarCheckAvailRequest
{

    /**
     * @var JP_RentacarRequestCheckAvailOption $RentacarOption
     */
    protected $RentacarOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RentacarRequestCheckAvailOption
     */
    public function getRentacarOption()
    {
      return $this->RentacarOption;
    }

    /**
     * @param JP_RentacarRequestCheckAvailOption $RentacarOption
     * @return JP_RentacarCheckAvailRequest
     */
    public function setRentacarOption($RentacarOption)
    {
      $this->RentacarOption = $RentacarOption;
      return $this;
    }

}

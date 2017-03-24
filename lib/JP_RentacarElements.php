<?php

class JP_RentacarElements
{

    /**
     * @var JP_RentacarElement $RentacarElement
     */
    protected $RentacarElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RentacarElement
     */
    public function getRentacarElement()
    {
      return $this->RentacarElement;
    }

    /**
     * @param JP_RentacarElement $RentacarElement
     * @return JP_RentacarElements
     */
    public function setRentacarElement($RentacarElement)
    {
      $this->RentacarElement = $RentacarElement;
      return $this;
    }

}

<?php

class JP_BookingPrice
{

    /**
     * @var JP_PriceRange $PriceRange
     */
    protected $PriceRange = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PriceRange
     */
    public function getPriceRange()
    {
      return $this->PriceRange;
    }

    /**
     * @param JP_PriceRange $PriceRange
     * @return JP_BookingPrice
     */
    public function setPriceRange($PriceRange)
    {
      $this->PriceRange = $PriceRange;
      return $this;
    }

}

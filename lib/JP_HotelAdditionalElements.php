<?php

class JP_HotelAdditionalElements
{

    /**
     * @var ArrayOfJP_HotelAdditionalElement $HotelSupplements
     */
    protected $HotelSupplements = null;

    /**
     * @var ArrayOfJP_HotelAdditionalElement1 $HotelOffers
     */
    protected $HotelOffers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_HotelAdditionalElement
     */
    public function getHotelSupplements()
    {
      return $this->HotelSupplements;
    }

    /**
     * @param ArrayOfJP_HotelAdditionalElement $HotelSupplements
     * @return JP_HotelAdditionalElements
     */
    public function setHotelSupplements($HotelSupplements)
    {
      $this->HotelSupplements = $HotelSupplements;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelAdditionalElement1
     */
    public function getHotelOffers()
    {
      return $this->HotelOffers;
    }

    /**
     * @param ArrayOfJP_HotelAdditionalElement1 $HotelOffers
     * @return JP_HotelAdditionalElements
     */
    public function setHotelOffers($HotelOffers)
    {
      $this->HotelOffers = $HotelOffers;
      return $this;
    }

}

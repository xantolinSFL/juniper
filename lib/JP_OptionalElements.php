<?php

class JP_OptionalElements
{

    /**
     * @var ArrayOfJP_Bag $Bags
     */
    protected $Bags = null;

    /**
     * @var ArrayOfJP_CreditCardFee $CreditCardsFee
     */
    protected $CreditCardsFee = null;

    /**
     * @var ArrayOfJP_FlightSupplement $FlightSupplements
     */
    protected $FlightSupplements = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_Bag
     */
    public function getBags()
    {
      return $this->Bags;
    }

    /**
     * @param ArrayOfJP_Bag $Bags
     * @return JP_OptionalElements
     */
    public function setBags($Bags)
    {
      $this->Bags = $Bags;
      return $this;
    }

    /**
     * @return ArrayOfJP_CreditCardFee
     */
    public function getCreditCardsFee()
    {
      return $this->CreditCardsFee;
    }

    /**
     * @param ArrayOfJP_CreditCardFee $CreditCardsFee
     * @return JP_OptionalElements
     */
    public function setCreditCardsFee($CreditCardsFee)
    {
      $this->CreditCardsFee = $CreditCardsFee;
      return $this;
    }

    /**
     * @return ArrayOfJP_FlightSupplement
     */
    public function getFlightSupplements()
    {
      return $this->FlightSupplements;
    }

    /**
     * @param ArrayOfJP_FlightSupplement $FlightSupplements
     * @return JP_OptionalElements
     */
    public function setFlightSupplements($FlightSupplements)
    {
      $this->FlightSupplements = $FlightSupplements;
      return $this;
    }

}

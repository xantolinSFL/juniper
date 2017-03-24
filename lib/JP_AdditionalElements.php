<?php

class JP_AdditionalElements
{

    /**
     * @var ArrayOfString2 $Fees
     */
    protected $Fees = null;

    /**
     * @var ArrayOfJP_Bag $Bags
     */
    protected $Bags = null;

    /**
     * @var JP_CreditCardFee $CreditCardFee
     */
    protected $CreditCardFee = null;

    /**
     * @var ArrayOfJP_FlightSupplement $FlightSupplements
     */
    protected $FlightSupplements = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString2
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param ArrayOfString2 $Fees
     * @return JP_AdditionalElements
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
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
     * @return JP_AdditionalElements
     */
    public function setBags($Bags)
    {
      $this->Bags = $Bags;
      return $this;
    }

    /**
     * @return JP_CreditCardFee
     */
    public function getCreditCardFee()
    {
      return $this->CreditCardFee;
    }

    /**
     * @param JP_CreditCardFee $CreditCardFee
     * @return JP_AdditionalElements
     */
    public function setCreditCardFee($CreditCardFee)
    {
      $this->CreditCardFee = $CreditCardFee;
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
     * @return JP_AdditionalElements
     */
    public function setFlightSupplements($FlightSupplements)
    {
      $this->FlightSupplements = $FlightSupplements;
      return $this;
    }

}

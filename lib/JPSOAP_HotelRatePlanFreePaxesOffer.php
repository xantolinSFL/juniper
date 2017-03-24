<?php

class JPSOAP_HotelRatePlanFreePaxesOffer
{

    /**
     * @var ArrayOfJPSOAP_Order $AdultAdditionals
     */
    protected $AdultAdditionals = null;

    /**
     * @var ArrayOfJPSOAP_Order1 $ChildrenA
     */
    protected $ChildrenA = null;

    /**
     * @var ArrayOfJPSOAP_Order1 $ChildrenB
     */
    protected $ChildrenB = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJPSOAP_Order
     */
    public function getAdultAdditionals()
    {
      return $this->AdultAdditionals;
    }

    /**
     * @param ArrayOfJPSOAP_Order $AdultAdditionals
     * @return JPSOAP_HotelRatePlanFreePaxesOffer
     */
    public function setAdultAdditionals($AdultAdditionals)
    {
      $this->AdultAdditionals = $AdultAdditionals;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_Order1
     */
    public function getChildrenA()
    {
      return $this->ChildrenA;
    }

    /**
     * @param ArrayOfJPSOAP_Order1 $ChildrenA
     * @return JPSOAP_HotelRatePlanFreePaxesOffer
     */
    public function setChildrenA($ChildrenA)
    {
      $this->ChildrenA = $ChildrenA;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_Order1
     */
    public function getChildrenB()
    {
      return $this->ChildrenB;
    }

    /**
     * @param ArrayOfJPSOAP_Order1 $ChildrenB
     * @return JPSOAP_HotelRatePlanFreePaxesOffer
     */
    public function setChildrenB($ChildrenB)
    {
      $this->ChildrenB = $ChildrenB;
      return $this;
    }

}

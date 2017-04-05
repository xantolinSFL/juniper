<?php

namespace Juniper\Webservice;

class JPSOAP_RateDiscounts
{

    /**
     * @var ArrayOfJPSOAP_Discount $AdultAdditionals
     */
    protected $AdultAdditionals = null;

    /**
     * @var ArrayOfJPSOAP_Discount1 $ChildrenA
     */
    protected $ChildrenA = null;

    /**
     * @var ArrayOfJPSOAP_Discount2 $ChildrenB
     */
    protected $ChildrenB = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJPSOAP_Discount
     */
    public function getAdultAdditionals()
    {
      return $this->AdultAdditionals;
    }

    /**
     * @param ArrayOfJPSOAP_Discount $AdultAdditionals
     * @return JPSOAP_RateDiscounts
     */
    public function setAdultAdditionals($AdultAdditionals)
    {
      $this->AdultAdditionals = $AdultAdditionals;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_Discount1
     */
    public function getChildrenA()
    {
      return $this->ChildrenA;
    }

    /**
     * @param ArrayOfJPSOAP_Discount1 $ChildrenA
     * @return JPSOAP_RateDiscounts
     */
    public function setChildrenA($ChildrenA)
    {
      $this->ChildrenA = $ChildrenA;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_Discount2
     */
    public function getChildrenB()
    {
      return $this->ChildrenB;
    }

    /**
     * @param ArrayOfJPSOAP_Discount2 $ChildrenB
     * @return JPSOAP_RateDiscounts
     */
    public function setChildrenB($ChildrenB)
    {
      $this->ChildrenB = $ChildrenB;
      return $this;
    }

}

<?php

class JPSOAP_RequiredOptionalSupplements
{

    /**
     * @var ArrayOfJPSOAP_IntCodeAttr $SupplementCategories
     */
    protected $SupplementCategories = null;

    /**
     * @var ArrayOfJPSOAP_IntCodeAttr1 $Supplements
     */
    protected $Supplements = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJPSOAP_IntCodeAttr
     */
    public function getSupplementCategories()
    {
      return $this->SupplementCategories;
    }

    /**
     * @param ArrayOfJPSOAP_IntCodeAttr $SupplementCategories
     * @return JPSOAP_RequiredOptionalSupplements
     */
    public function setSupplementCategories($SupplementCategories)
    {
      $this->SupplementCategories = $SupplementCategories;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_IntCodeAttr1
     */
    public function getSupplements()
    {
      return $this->Supplements;
    }

    /**
     * @param ArrayOfJPSOAP_IntCodeAttr1 $Supplements
     * @return JPSOAP_RequiredOptionalSupplements
     */
    public function setSupplements($Supplements)
    {
      $this->Supplements = $Supplements;
      return $this;
    }

}

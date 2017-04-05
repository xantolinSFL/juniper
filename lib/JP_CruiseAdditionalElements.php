<?php

namespace Juniper\Webservice;

class JP_CruiseAdditionalElements
{

    /**
     * @var ArrayOfString2 $Fees
     */
    protected $Fees = null;

    /**
     * @var ArrayOfJP_CruiseComponent $Components
     */
    protected $Components = null;

    /**
     * @var ArrayOfJP_CruisePromotion $Promotions
     */
    protected $Promotions = null;

    /**
     * @var ArrayOfJP_CruiseSupplement $CruiseSupplements
     */
    protected $CruiseSupplements = null;

    
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
     * @return JP_CruiseAdditionalElements
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruiseComponent
     */
    public function getComponents()
    {
      return $this->Components;
    }

    /**
     * @param ArrayOfJP_CruiseComponent $Components
     * @return JP_CruiseAdditionalElements
     */
    public function setComponents($Components)
    {
      $this->Components = $Components;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruisePromotion
     */
    public function getPromotions()
    {
      return $this->Promotions;
    }

    /**
     * @param ArrayOfJP_CruisePromotion $Promotions
     * @return JP_CruiseAdditionalElements
     */
    public function setPromotions($Promotions)
    {
      $this->Promotions = $Promotions;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruiseSupplement
     */
    public function getCruiseSupplements()
    {
      return $this->CruiseSupplements;
    }

    /**
     * @param ArrayOfJP_CruiseSupplement $CruiseSupplements
     * @return JP_CruiseAdditionalElements
     */
    public function setCruiseSupplements($CruiseSupplements)
    {
      $this->CruiseSupplements = $CruiseSupplements;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JP_BreakdownPrice
{

    /**
     * @var ArrayOfJP_ConceptBreakdown $Concepts
     */
    protected $Concepts = null;

    /**
     * @var ArrayOfJP_CommonPriceBreakdown $Taxes
     */
    protected $Taxes = null;

    /**
     * @var ArrayOfJP_CommonPriceBreakdown1 $Commissions
     */
    protected $Commissions = null;

    /**
     * @var ArrayOfJP_CommonPriceBreakdown2 $Discounts
     */
    protected $Discounts = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_ConceptBreakdown
     */
    public function getConcepts()
    {
      return $this->Concepts;
    }

    /**
     * @param ArrayOfJP_ConceptBreakdown $Concepts
     * @return JP_BreakdownPrice
     */
    public function setConcepts($Concepts)
    {
      $this->Concepts = $Concepts;
      return $this;
    }

    /**
     * @return ArrayOfJP_CommonPriceBreakdown
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfJP_CommonPriceBreakdown $Taxes
     * @return JP_BreakdownPrice
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return ArrayOfJP_CommonPriceBreakdown1
     */
    public function getCommissions()
    {
      return $this->Commissions;
    }

    /**
     * @param ArrayOfJP_CommonPriceBreakdown1 $Commissions
     * @return JP_BreakdownPrice
     */
    public function setCommissions($Commissions)
    {
      $this->Commissions = $Commissions;
      return $this;
    }

    /**
     * @return ArrayOfJP_CommonPriceBreakdown2
     */
    public function getDiscounts()
    {
      return $this->Discounts;
    }

    /**
     * @param ArrayOfJP_CommonPriceBreakdown2 $Discounts
     * @return JP_BreakdownPrice
     */
    public function setDiscounts($Discounts)
    {
      $this->Discounts = $Discounts;
      return $this;
    }

}

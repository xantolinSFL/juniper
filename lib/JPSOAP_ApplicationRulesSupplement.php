<?php

namespace Juniper\Webservice;

class JPSOAP_ApplicationRulesSupplement extends JPSOAP_ApplicationRules
{

    /**
     * @var ArrayOfJPSOAP_IntCodeAttr1 $AlternateWithSupplements
     */
    protected $AlternateWithSupplements = null;

    /**
     * @var JPSOAP_CalculationBySeason $CalculationBySeason
     */
    protected $CalculationBySeason = null;

    /**
     * @param boolean $MustMatchAllStayDates
     * @param boolean $ApplyAllStayIfMatchAnyDate
     * @param JPSOAP_ApplicationRuleQuotation $Quotation
     * @param JPSOAP_CalculationBySeason $CalculationBySeason
     */
    public function __construct($MustMatchAllStayDates, $ApplyAllStayIfMatchAnyDate, $Quotation, $CalculationBySeason)
    {
      parent::__construct($MustMatchAllStayDates, $ApplyAllStayIfMatchAnyDate, $Quotation);
      $this->CalculationBySeason = $CalculationBySeason;
    }

    /**
     * @return ArrayOfJPSOAP_IntCodeAttr1
     */
    public function getAlternateWithSupplements()
    {
      return $this->AlternateWithSupplements;
    }

    /**
     * @param ArrayOfJPSOAP_IntCodeAttr1 $AlternateWithSupplements
     * @return JPSOAP_ApplicationRulesSupplement
     */
    public function setAlternateWithSupplements($AlternateWithSupplements)
    {
      $this->AlternateWithSupplements = $AlternateWithSupplements;
      return $this;
    }

    /**
     * @return JPSOAP_CalculationBySeason
     */
    public function getCalculationBySeason()
    {
      return $this->CalculationBySeason;
    }

    /**
     * @param JPSOAP_CalculationBySeason $CalculationBySeason
     * @return JPSOAP_ApplicationRulesSupplement
     */
    public function setCalculationBySeason($CalculationBySeason)
    {
      $this->CalculationBySeason = $CalculationBySeason;
      return $this;
    }

}

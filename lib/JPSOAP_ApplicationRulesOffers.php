<?php

namespace Juniper\Webservice;

class JPSOAP_ApplicationRulesOffers extends JPSOAP_ApplicationRules
{

    /**
     * @var ArrayOfJPSOAP_IntCodeAttr4 $ApplyWithOffers
     */
    protected $ApplyWithOffers = null;

    /**
     * @var ArrayOfJPSOAP_IntCodeAttr4 $AlternateWithOffers
     */
    protected $AlternateWithOffers = null;

    /**
     * @var boolean $ApplyAdditionals
     */
    protected $ApplyAdditionals = null;

    /**
     * @var boolean $ApplyChildren
     */
    protected $ApplyChildren = null;

    /**
     * @var boolean $NonRefundable
     */
    protected $NonRefundable = null;

    /**
     * @var int $MinAge
     */
    protected $MinAge = null;

    /**
     * @param boolean $MustMatchAllStayDates
     * @param boolean $ApplyAllStayIfMatchAnyDate
     * @param JPSOAP_ApplicationRuleQuotation $Quotation
     * @param boolean $ApplyAdditionals
     * @param boolean $ApplyChildren
     * @param boolean $NonRefundable
     * @param int $MinAge
     */
    public function __construct($MustMatchAllStayDates, $ApplyAllStayIfMatchAnyDate, $Quotation, $ApplyAdditionals, $ApplyChildren, $NonRefundable, $MinAge)
    {
      parent::__construct($MustMatchAllStayDates, $ApplyAllStayIfMatchAnyDate, $Quotation);
      $this->ApplyAdditionals = $ApplyAdditionals;
      $this->ApplyChildren = $ApplyChildren;
      $this->NonRefundable = $NonRefundable;
      $this->MinAge = $MinAge;
    }

    /**
     * @return ArrayOfJPSOAP_IntCodeAttr4
     */
    public function getApplyWithOffers()
    {
      return $this->ApplyWithOffers;
    }

    /**
     * @param ArrayOfJPSOAP_IntCodeAttr4 $ApplyWithOffers
     * @return JPSOAP_ApplicationRulesOffers
     */
    public function setApplyWithOffers($ApplyWithOffers)
    {
      $this->ApplyWithOffers = $ApplyWithOffers;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_IntCodeAttr4
     */
    public function getAlternateWithOffers()
    {
      return $this->AlternateWithOffers;
    }

    /**
     * @param ArrayOfJPSOAP_IntCodeAttr4 $AlternateWithOffers
     * @return JPSOAP_ApplicationRulesOffers
     */
    public function setAlternateWithOffers($AlternateWithOffers)
    {
      $this->AlternateWithOffers = $AlternateWithOffers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyAdditionals()
    {
      return $this->ApplyAdditionals;
    }

    /**
     * @param boolean $ApplyAdditionals
     * @return JPSOAP_ApplicationRulesOffers
     */
    public function setApplyAdditionals($ApplyAdditionals)
    {
      $this->ApplyAdditionals = $ApplyAdditionals;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyChildren()
    {
      return $this->ApplyChildren;
    }

    /**
     * @param boolean $ApplyChildren
     * @return JPSOAP_ApplicationRulesOffers
     */
    public function setApplyChildren($ApplyChildren)
    {
      $this->ApplyChildren = $ApplyChildren;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonRefundable()
    {
      return $this->NonRefundable;
    }

    /**
     * @param boolean $NonRefundable
     * @return JPSOAP_ApplicationRulesOffers
     */
    public function setNonRefundable($NonRefundable)
    {
      $this->NonRefundable = $NonRefundable;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinAge()
    {
      return $this->MinAge;
    }

    /**
     * @param int $MinAge
     * @return JPSOAP_ApplicationRulesOffers
     */
    public function setMinAge($MinAge)
    {
      $this->MinAge = $MinAge;
      return $this;
    }

}

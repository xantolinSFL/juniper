<?php

namespace Juniper\Webservice;

class JP_TotalFixAmounts
{

    /**
     * @var JP_Service $Service
     */
    protected $Service = null;

    /**
     * @var JP_ServiceTaxes $ServiceTaxes
     */
    protected $ServiceTaxes = null;

    /**
     * @var JP_Commissions $Commissions
     */
    protected $Commissions = null;

    /**
     * @var JP_HandlingFees $HandlingFees
     */
    protected $HandlingFees = null;

    /**
     * @var JP_Discount $Discount
     */
    protected $Discount = null;

    /**
     * @var float $Recommended
     */
    protected $Recommended = null;

    /**
     * @var float $Gross
     */
    protected $Gross = null;

    /**
     * @var float $Nett
     */
    protected $Nett = null;

    /**
     * @param float $Recommended
     * @param float $Gross
     * @param float $Nett
     */
    public function __construct($Recommended, $Gross, $Nett)
    {
      $this->Recommended = $Recommended;
      $this->Gross = $Gross;
      $this->Nett = $Nett;
    }

    /**
     * @return JP_Service
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param JP_Service $Service
     * @return JP_TotalFixAmounts
     */
    public function setService($Service)
    {
      $this->Service = $Service;
      return $this;
    }

    /**
     * @return JP_ServiceTaxes
     */
    public function getServiceTaxes()
    {
      return $this->ServiceTaxes;
    }

    /**
     * @param JP_ServiceTaxes $ServiceTaxes
     * @return JP_TotalFixAmounts
     */
    public function setServiceTaxes($ServiceTaxes)
    {
      $this->ServiceTaxes = $ServiceTaxes;
      return $this;
    }

    /**
     * @return JP_Commissions
     */
    public function getCommissions()
    {
      return $this->Commissions;
    }

    /**
     * @param JP_Commissions $Commissions
     * @return JP_TotalFixAmounts
     */
    public function setCommissions($Commissions)
    {
      $this->Commissions = $Commissions;
      return $this;
    }

    /**
     * @return JP_HandlingFees
     */
    public function getHandlingFees()
    {
      return $this->HandlingFees;
    }

    /**
     * @param JP_HandlingFees $HandlingFees
     * @return JP_TotalFixAmounts
     */
    public function setHandlingFees($HandlingFees)
    {
      $this->HandlingFees = $HandlingFees;
      return $this;
    }

    /**
     * @return JP_Discount
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param JP_Discount $Discount
     * @return JP_TotalFixAmounts
     */
    public function setDiscount($Discount)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecommended()
    {
      return $this->Recommended;
    }

    /**
     * @param float $Recommended
     * @return JP_TotalFixAmounts
     */
    public function setRecommended($Recommended)
    {
      $this->Recommended = $Recommended;
      return $this;
    }

    /**
     * @return float
     */
    public function getGross()
    {
      return $this->Gross;
    }

    /**
     * @param float $Gross
     * @return JP_TotalFixAmounts
     */
    public function setGross($Gross)
    {
      $this->Gross = $Gross;
      return $this;
    }

    /**
     * @return float
     */
    public function getNett()
    {
      return $this->Nett;
    }

    /**
     * @param float $Nett
     * @return JP_TotalFixAmounts
     */
    public function setNett($Nett)
    {
      $this->Nett = $Nett;
      return $this;
    }

}

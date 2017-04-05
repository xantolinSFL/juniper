<?php

namespace Juniper\Webservice;

class JPSOAP_ApplicationRules
{

    /**
     * @var JPSOAP_DateIntervalsGroupsStayDates $StayDates
     */
    protected $StayDates = null;

    /**
     * @var JPSOAP_DateIntervalsGroupsCheckInDates $CheckInDates
     */
    protected $CheckInDates = null;

    /**
     * @var JPSOAP_DateIntervals $BookingDates
     */
    protected $BookingDates = null;

    /**
     * @var JPSOAP_StayRestrictions $StayRestrictions
     */
    protected $StayRestrictions = null;

    /**
     * @var JPSOAP_BookingInAdvance $BookingInAdvance
     */
    protected $BookingInAdvance = null;

    /**
     * @var JPSOAP_OccupanciesRules $OccupancyRules
     */
    protected $OccupancyRules = null;

    /**
     * @var boolean $MustMatchAllStayDates
     */
    protected $MustMatchAllStayDates = null;

    /**
     * @var boolean $ApplyAllStayIfMatchAnyDate
     */
    protected $ApplyAllStayIfMatchAnyDate = null;

    /**
     * @var JPSOAP_ApplicationRuleQuotation $Quotation
     */
    protected $Quotation = null;

    /**
     * @param boolean $MustMatchAllStayDates
     * @param boolean $ApplyAllStayIfMatchAnyDate
     * @param JPSOAP_ApplicationRuleQuotation $Quotation
     */
    public function __construct($MustMatchAllStayDates, $ApplyAllStayIfMatchAnyDate, $Quotation)
    {
      $this->MustMatchAllStayDates = $MustMatchAllStayDates;
      $this->ApplyAllStayIfMatchAnyDate = $ApplyAllStayIfMatchAnyDate;
      $this->Quotation = $Quotation;
    }

    /**
     * @return JPSOAP_DateIntervalsGroupsStayDates
     */
    public function getStayDates()
    {
      return $this->StayDates;
    }

    /**
     * @param JPSOAP_DateIntervalsGroupsStayDates $StayDates
     * @return JPSOAP_ApplicationRules
     */
    public function setStayDates($StayDates)
    {
      $this->StayDates = $StayDates;
      return $this;
    }

    /**
     * @return JPSOAP_DateIntervalsGroupsCheckInDates
     */
    public function getCheckInDates()
    {
      return $this->CheckInDates;
    }

    /**
     * @param JPSOAP_DateIntervalsGroupsCheckInDates $CheckInDates
     * @return JPSOAP_ApplicationRules
     */
    public function setCheckInDates($CheckInDates)
    {
      $this->CheckInDates = $CheckInDates;
      return $this;
    }

    /**
     * @return JPSOAP_DateIntervals
     */
    public function getBookingDates()
    {
      return $this->BookingDates;
    }

    /**
     * @param JPSOAP_DateIntervals $BookingDates
     * @return JPSOAP_ApplicationRules
     */
    public function setBookingDates($BookingDates)
    {
      $this->BookingDates = $BookingDates;
      return $this;
    }

    /**
     * @return JPSOAP_StayRestrictions
     */
    public function getStayRestrictions()
    {
      return $this->StayRestrictions;
    }

    /**
     * @param JPSOAP_StayRestrictions $StayRestrictions
     * @return JPSOAP_ApplicationRules
     */
    public function setStayRestrictions($StayRestrictions)
    {
      $this->StayRestrictions = $StayRestrictions;
      return $this;
    }

    /**
     * @return JPSOAP_BookingInAdvance
     */
    public function getBookingInAdvance()
    {
      return $this->BookingInAdvance;
    }

    /**
     * @param JPSOAP_BookingInAdvance $BookingInAdvance
     * @return JPSOAP_ApplicationRules
     */
    public function setBookingInAdvance($BookingInAdvance)
    {
      $this->BookingInAdvance = $BookingInAdvance;
      return $this;
    }

    /**
     * @return JPSOAP_OccupanciesRules
     */
    public function getOccupancyRules()
    {
      return $this->OccupancyRules;
    }

    /**
     * @param JPSOAP_OccupanciesRules $OccupancyRules
     * @return JPSOAP_ApplicationRules
     */
    public function setOccupancyRules($OccupancyRules)
    {
      $this->OccupancyRules = $OccupancyRules;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMustMatchAllStayDates()
    {
      return $this->MustMatchAllStayDates;
    }

    /**
     * @param boolean $MustMatchAllStayDates
     * @return JPSOAP_ApplicationRules
     */
    public function setMustMatchAllStayDates($MustMatchAllStayDates)
    {
      $this->MustMatchAllStayDates = $MustMatchAllStayDates;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyAllStayIfMatchAnyDate()
    {
      return $this->ApplyAllStayIfMatchAnyDate;
    }

    /**
     * @param boolean $ApplyAllStayIfMatchAnyDate
     * @return JPSOAP_ApplicationRules
     */
    public function setApplyAllStayIfMatchAnyDate($ApplyAllStayIfMatchAnyDate)
    {
      $this->ApplyAllStayIfMatchAnyDate = $ApplyAllStayIfMatchAnyDate;
      return $this;
    }

    /**
     * @return JPSOAP_ApplicationRuleQuotation
     */
    public function getQuotation()
    {
      return $this->Quotation;
    }

    /**
     * @param JPSOAP_ApplicationRuleQuotation $Quotation
     * @return JPSOAP_ApplicationRules
     */
    public function setQuotation($Quotation)
    {
      $this->Quotation = $Quotation;
      return $this;
    }

}

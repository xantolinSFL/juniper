<?php

class HotelBookingRules
{

    /**
     * @var JP_HotelBookingRuleRQ $HotelBookingRulesRQ
     */
    protected $HotelBookingRulesRQ = null;

    /**
     * @param JP_HotelBookingRuleRQ $HotelBookingRulesRQ
     */
    public function __construct($HotelBookingRulesRQ)
    {
      $this->HotelBookingRulesRQ = $HotelBookingRulesRQ;
    }

    /**
     * @return JP_HotelBookingRuleRQ
     */
    public function getHotelBookingRulesRQ()
    {
      return $this->HotelBookingRulesRQ;
    }

    /**
     * @param JP_HotelBookingRuleRQ $HotelBookingRulesRQ
     * @return HotelBookingRules
     */
    public function setHotelBookingRulesRQ($HotelBookingRulesRQ)
    {
      $this->HotelBookingRulesRQ = $HotelBookingRulesRQ;
      return $this;
    }

}

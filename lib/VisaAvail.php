<?php

class VisaAvail
{

    /**
     * @var JP_VisaAvailabilityRQ $VisaAvailRQ
     */
    protected $VisaAvailRQ = null;

    /**
     * @param JP_VisaAvailabilityRQ $VisaAvailRQ
     */
    public function __construct($VisaAvailRQ)
    {
      $this->VisaAvailRQ = $VisaAvailRQ;
    }

    /**
     * @return JP_VisaAvailabilityRQ
     */
    public function getVisaAvailRQ()
    {
      return $this->VisaAvailRQ;
    }

    /**
     * @param JP_VisaAvailabilityRQ $VisaAvailRQ
     * @return VisaAvail
     */
    public function setVisaAvailRQ($VisaAvailRQ)
    {
      $this->VisaAvailRQ = $VisaAvailRQ;
      return $this;
    }

}

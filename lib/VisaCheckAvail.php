<?php

class VisaCheckAvail
{

    /**
     * @var JP_VisaCheckAvailRQ $VisaCheckAvailRQ
     */
    protected $VisaCheckAvailRQ = null;

    /**
     * @param JP_VisaCheckAvailRQ $VisaCheckAvailRQ
     */
    public function __construct($VisaCheckAvailRQ)
    {
      $this->VisaCheckAvailRQ = $VisaCheckAvailRQ;
    }

    /**
     * @return JP_VisaCheckAvailRQ
     */
    public function getVisaCheckAvailRQ()
    {
      return $this->VisaCheckAvailRQ;
    }

    /**
     * @param JP_VisaCheckAvailRQ $VisaCheckAvailRQ
     * @return VisaCheckAvail
     */
    public function setVisaCheckAvailRQ($VisaCheckAvailRQ)
    {
      $this->VisaCheckAvailRQ = $VisaCheckAvailRQ;
      return $this;
    }

}

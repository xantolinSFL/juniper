<?php

namespace Juniper\Webservice;

class JP_FlightDiscount
{

    /**
     * @var boolean $Resident
     */
    protected $Resident = null;

    /**
     * @var string $LargeFamily
     */
    protected $LargeFamily = null;

    /**
     * @param boolean $Resident
     * @param string $LargeFamily
     */
    public function __construct($Resident, $LargeFamily)
    {
      $this->Resident = $Resident;
      $this->LargeFamily = $LargeFamily;
    }

    /**
     * @return boolean
     */
    public function getResident()
    {
      return $this->Resident;
    }

    /**
     * @param boolean $Resident
     * @return JP_FlightDiscount
     */
    public function setResident($Resident)
    {
      $this->Resident = $Resident;
      return $this;
    }

    /**
     * @return string
     */
    public function getLargeFamily()
    {
      return $this->LargeFamily;
    }

    /**
     * @param string $LargeFamily
     * @return JP_FlightDiscount
     */
    public function setLargeFamily($LargeFamily)
    {
      $this->LargeFamily = $LargeFamily;
      return $this;
    }

}

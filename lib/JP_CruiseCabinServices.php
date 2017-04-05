<?php

namespace Juniper\Webservice;

class JP_CruiseCabinServices
{

    /**
     * @var boolean $Dryer
     */
    protected $Dryer = null;

    /**
     * @var boolean $Phone
     */
    protected $Phone = null;

    /**
     * @var boolean $Cabinasistan
     */
    protected $Cabinasistan = null;

    /**
     * @var boolean $Internet
     */
    protected $Internet = null;

    /**
     * @var boolean $Safe
     */
    protected $Safe = null;

    /**
     * @var boolean $Contiguous
     */
    protected $Contiguous = null;

    /**
     * @param boolean $Dryer
     * @param boolean $Phone
     * @param boolean $Cabinasistan
     * @param boolean $Internet
     * @param boolean $Safe
     * @param boolean $Contiguous
     */
    public function __construct($Dryer, $Phone, $Cabinasistan, $Internet, $Safe, $Contiguous)
    {
      $this->Dryer = $Dryer;
      $this->Phone = $Phone;
      $this->Cabinasistan = $Cabinasistan;
      $this->Internet = $Internet;
      $this->Safe = $Safe;
      $this->Contiguous = $Contiguous;
    }

    /**
     * @return boolean
     */
    public function getDryer()
    {
      return $this->Dryer;
    }

    /**
     * @param boolean $Dryer
     * @return JP_CruiseCabinServices
     */
    public function setDryer($Dryer)
    {
      $this->Dryer = $Dryer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param boolean $Phone
     * @return JP_CruiseCabinServices
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCabinasistan()
    {
      return $this->Cabinasistan;
    }

    /**
     * @param boolean $Cabinasistan
     * @return JP_CruiseCabinServices
     */
    public function setCabinasistan($Cabinasistan)
    {
      $this->Cabinasistan = $Cabinasistan;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInternet()
    {
      return $this->Internet;
    }

    /**
     * @param boolean $Internet
     * @return JP_CruiseCabinServices
     */
    public function setInternet($Internet)
    {
      $this->Internet = $Internet;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSafe()
    {
      return $this->Safe;
    }

    /**
     * @param boolean $Safe
     * @return JP_CruiseCabinServices
     */
    public function setSafe($Safe)
    {
      $this->Safe = $Safe;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getContiguous()
    {
      return $this->Contiguous;
    }

    /**
     * @param boolean $Contiguous
     * @return JP_CruiseCabinServices
     */
    public function setContiguous($Contiguous)
    {
      $this->Contiguous = $Contiguous;
      return $this;
    }

}

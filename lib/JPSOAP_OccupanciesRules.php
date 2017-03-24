<?php

class JPSOAP_OccupanciesRules extends JPSOAP_Occupancies
{

    /**
     * @var int $MinPaxes
     */
    protected $MinPaxes = null;

    /**
     * @var int $MaxPaxes
     */
    protected $MaxPaxes = null;

    /**
     * @var boolean $Infants
     */
    protected $Infants = null;

    /**
     * @param int $MinPaxes
     * @param int $MaxPaxes
     * @param boolean $Infants
     */
    public function __construct($MinPaxes, $MaxPaxes, $Infants)
    {
      parent::__construct();
      $this->MinPaxes = $MinPaxes;
      $this->MaxPaxes = $MaxPaxes;
      $this->Infants = $Infants;
    }

    /**
     * @return int
     */
    public function getMinPaxes()
    {
      return $this->MinPaxes;
    }

    /**
     * @param int $MinPaxes
     * @return JPSOAP_OccupanciesRules
     */
    public function setMinPaxes($MinPaxes)
    {
      $this->MinPaxes = $MinPaxes;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxPaxes()
    {
      return $this->MaxPaxes;
    }

    /**
     * @param int $MaxPaxes
     * @return JPSOAP_OccupanciesRules
     */
    public function setMaxPaxes($MaxPaxes)
    {
      $this->MaxPaxes = $MaxPaxes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInfants()
    {
      return $this->Infants;
    }

    /**
     * @param boolean $Infants
     * @return JPSOAP_OccupanciesRules
     */
    public function setInfants($Infants)
    {
      $this->Infants = $Infants;
      return $this;
    }

}

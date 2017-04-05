<?php

namespace Juniper\Webservice;

class JP_Overview
{

    /**
     * @var int $Building
     */
    protected $Building = null;

    /**
     * @var float $Span
     */
    protected $Span = null;

    /**
     * @var string $Servicelevel
     */
    protected $Servicelevel = null;

    /**
     * @var float $Tonnage
     */
    protected $Tonnage = null;

    /**
     * @var float $Sleeve
     */
    protected $Sleeve = null;

    /**
     * @var float $Length
     */
    protected $Length = null;

    /**
     * @var int $CabExt
     */
    protected $CabExt = null;

    /**
     * @var int $CabInt
     */
    protected $CabInt = null;

    /**
     * @var int $CabBal
     */
    protected $CabBal = null;

    /**
     * @var int $CapMaxCab
     */
    protected $CapMaxCab = null;

    /**
     * @var int $CapTotal
     */
    protected $CapTotal = null;

    /**
     * @var string $Flag
     */
    protected $Flag = null;

    /**
     * @var string $Crew
     */
    protected $Crew = null;

    /**
     * @var int $Decks
     */
    protected $Decks = null;

    /**
     * @var int $Refurbished
     */
    protected $Refurbished = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getBuilding()
    {
      return $this->Building;
    }

    /**
     * @param int $Building
     * @return JP_Overview
     */
    public function setBuilding($Building)
    {
      $this->Building = $Building;
      return $this;
    }

    /**
     * @return float
     */
    public function getSpan()
    {
      return $this->Span;
    }

    /**
     * @param float $Span
     * @return JP_Overview
     */
    public function setSpan($Span)
    {
      $this->Span = $Span;
      return $this;
    }

    /**
     * @return string
     */
    public function getServicelevel()
    {
      return $this->Servicelevel;
    }

    /**
     * @param string $Servicelevel
     * @return JP_Overview
     */
    public function setServicelevel($Servicelevel)
    {
      $this->Servicelevel = $Servicelevel;
      return $this;
    }

    /**
     * @return float
     */
    public function getTonnage()
    {
      return $this->Tonnage;
    }

    /**
     * @param float $Tonnage
     * @return JP_Overview
     */
    public function setTonnage($Tonnage)
    {
      $this->Tonnage = $Tonnage;
      return $this;
    }

    /**
     * @return float
     */
    public function getSleeve()
    {
      return $this->Sleeve;
    }

    /**
     * @param float $Sleeve
     * @return JP_Overview
     */
    public function setSleeve($Sleeve)
    {
      $this->Sleeve = $Sleeve;
      return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param float $Length
     * @return JP_Overview
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return int
     */
    public function getCabExt()
    {
      return $this->CabExt;
    }

    /**
     * @param int $CabExt
     * @return JP_Overview
     */
    public function setCabExt($CabExt)
    {
      $this->CabExt = $CabExt;
      return $this;
    }

    /**
     * @return int
     */
    public function getCabInt()
    {
      return $this->CabInt;
    }

    /**
     * @param int $CabInt
     * @return JP_Overview
     */
    public function setCabInt($CabInt)
    {
      $this->CabInt = $CabInt;
      return $this;
    }

    /**
     * @return int
     */
    public function getCabBal()
    {
      return $this->CabBal;
    }

    /**
     * @param int $CabBal
     * @return JP_Overview
     */
    public function setCabBal($CabBal)
    {
      $this->CabBal = $CabBal;
      return $this;
    }

    /**
     * @return int
     */
    public function getCapMaxCab()
    {
      return $this->CapMaxCab;
    }

    /**
     * @param int $CapMaxCab
     * @return JP_Overview
     */
    public function setCapMaxCab($CapMaxCab)
    {
      $this->CapMaxCab = $CapMaxCab;
      return $this;
    }

    /**
     * @return int
     */
    public function getCapTotal()
    {
      return $this->CapTotal;
    }

    /**
     * @param int $CapTotal
     * @return JP_Overview
     */
    public function setCapTotal($CapTotal)
    {
      $this->CapTotal = $CapTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlag()
    {
      return $this->Flag;
    }

    /**
     * @param string $Flag
     * @return JP_Overview
     */
    public function setFlag($Flag)
    {
      $this->Flag = $Flag;
      return $this;
    }

    /**
     * @return string
     */
    public function getCrew()
    {
      return $this->Crew;
    }

    /**
     * @param string $Crew
     * @return JP_Overview
     */
    public function setCrew($Crew)
    {
      $this->Crew = $Crew;
      return $this;
    }

    /**
     * @return int
     */
    public function getDecks()
    {
      return $this->Decks;
    }

    /**
     * @param int $Decks
     * @return JP_Overview
     */
    public function setDecks($Decks)
    {
      $this->Decks = $Decks;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefurbished()
    {
      return $this->Refurbished;
    }

    /**
     * @param int $Refurbished
     * @return JP_Overview
     */
    public function setRefurbished($Refurbished)
    {
      $this->Refurbished = $Refurbished;
      return $this;
    }

}

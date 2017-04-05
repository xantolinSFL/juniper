<?php

namespace Juniper\Webservice;

class JPSOAP_Ages
{

    /**
     * @var int $Infants
     */
    protected $Infants = null;

    /**
     * @var int $ChildA
     */
    protected $ChildA = null;

    /**
     * @var int $ChildB
     */
    protected $ChildB = null;

    /**
     * @param int $Infants
     * @param int $ChildA
     * @param int $ChildB
     */
    public function __construct($Infants, $ChildA, $ChildB)
    {
      $this->Infants = $Infants;
      $this->ChildA = $ChildA;
      $this->ChildB = $ChildB;
    }

    /**
     * @return int
     */
    public function getInfants()
    {
      return $this->Infants;
    }

    /**
     * @param int $Infants
     * @return JPSOAP_Ages
     */
    public function setInfants($Infants)
    {
      $this->Infants = $Infants;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildA()
    {
      return $this->ChildA;
    }

    /**
     * @param int $ChildA
     * @return JPSOAP_Ages
     */
    public function setChildA($ChildA)
    {
      $this->ChildA = $ChildA;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildB()
    {
      return $this->ChildB;
    }

    /**
     * @param int $ChildB
     * @return JPSOAP_Ages
     */
    public function setChildB($ChildB)
    {
      $this->ChildB = $ChildB;
      return $this;
    }

}

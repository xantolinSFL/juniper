<?php

namespace Juniper\Webservice;

class JP_Paxes
{

    /**
     * @var JP_Pax[] $Pax
     */
    protected $Pax = null;

    /**
     * @var int $AdultsFree
     */
    protected $AdultsFree = null;

    /**
     * @var int $ChildrenFree
     */
    protected $ChildrenFree = null;

    /**
     * @param int $AdultsFree
     * @param int $ChildrenFree
     */
    public function __construct($AdultsFree, $ChildrenFree)
    {
      $this->AdultsFree = $AdultsFree;
      $this->ChildrenFree = $ChildrenFree;
    }

    /**
     * @return JP_Pax[]
     */
    public function getPax()
    {
      return $this->Pax;
    }

    /**
     * @param JP_Pax[] $Pax
     * @return JP_Paxes
     */
    public function setPax(array $Pax = null)
    {
      $this->Pax = $Pax;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdultsFree()
    {
      return $this->AdultsFree;
    }

    /**
     * @param int $AdultsFree
     * @return JP_Paxes
     */
    public function setAdultsFree($AdultsFree)
    {
      $this->AdultsFree = $AdultsFree;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildrenFree()
    {
      return $this->ChildrenFree;
    }

    /**
     * @param int $ChildrenFree
     * @return JP_Paxes
     */
    public function setChildrenFree($ChildrenFree)
    {
      $this->ChildrenFree = $ChildrenFree;
      return $this;
    }

}

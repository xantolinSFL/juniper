<?php

namespace Juniper\Webservice;

class JP_SeatEquipment
{

    /**
     * @var ArrayOfJP_Compartment $Compartments
     */
    protected $Compartments = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param string $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return ArrayOfJP_Compartment
     */
    public function getCompartments()
    {
      return $this->Compartments;
    }

    /**
     * @param ArrayOfJP_Compartment $Compartments
     * @return JP_SeatEquipment
     */
    public function setCompartments($Compartments)
    {
      $this->Compartments = $Compartments;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return JP_SeatEquipment
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}

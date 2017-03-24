<?php

class JP_SeatingMap
{

    /**
     * @var ArrayOfJP_SeatEquipment $SeatEquipments
     */
    protected $SeatEquipments = null;

    /**
     * @var ArrayOfJP_GroupFee $GroupFees
     */
    protected $GroupFees = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_SeatEquipment
     */
    public function getSeatEquipments()
    {
      return $this->SeatEquipments;
    }

    /**
     * @param ArrayOfJP_SeatEquipment $SeatEquipments
     * @return JP_SeatingMap
     */
    public function setSeatEquipments($SeatEquipments)
    {
      $this->SeatEquipments = $SeatEquipments;
      return $this;
    }

    /**
     * @return ArrayOfJP_GroupFee
     */
    public function getGroupFees()
    {
      return $this->GroupFees;
    }

    /**
     * @param ArrayOfJP_GroupFee $GroupFees
     * @return JP_SeatingMap
     */
    public function setGroupFees($GroupFees)
    {
      $this->GroupFees = $GroupFees;
      return $this;
    }

}

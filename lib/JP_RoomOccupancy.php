<?php

class JP_RoomOccupancy
{

    /**
     * @var int $Occupancy
     */
    protected $Occupancy = null;

    /**
     * @var int $MaxOccupancy
     */
    protected $MaxOccupancy = null;

    /**
     * @var int $MinOccupancy
     */
    protected $MinOccupancy = null;

    /**
     * @var int $Adults
     */
    protected $Adults = null;

    /**
     * @var int $MaxAdults
     */
    protected $MaxAdults = null;

    /**
     * @var int $MinAdults
     */
    protected $MinAdults = null;

    /**
     * @var int $Children
     */
    protected $Children = null;

    /**
     * @var int $MaxChildren
     */
    protected $MaxChildren = null;

    /**
     * @var int $MinChildren
     */
    protected $MinChildren = null;

    /**
     * @param int $Occupancy
     * @param int $MaxOccupancy
     * @param int $MinOccupancy
     * @param int $Adults
     * @param int $MaxAdults
     * @param int $MinAdults
     * @param int $Children
     * @param int $MaxChildren
     * @param int $MinChildren
     */
    public function __construct($Occupancy, $MaxOccupancy, $MinOccupancy, $Adults, $MaxAdults, $MinAdults, $Children, $MaxChildren, $MinChildren)
    {
      $this->Occupancy = $Occupancy;
      $this->MaxOccupancy = $MaxOccupancy;
      $this->MinOccupancy = $MinOccupancy;
      $this->Adults = $Adults;
      $this->MaxAdults = $MaxAdults;
      $this->MinAdults = $MinAdults;
      $this->Children = $Children;
      $this->MaxChildren = $MaxChildren;
      $this->MinChildren = $MinChildren;
    }

    /**
     * @return int
     */
    public function getOccupancy()
    {
      return $this->Occupancy;
    }

    /**
     * @param int $Occupancy
     * @return JP_RoomOccupancy
     */
    public function setOccupancy($Occupancy)
    {
      $this->Occupancy = $Occupancy;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxOccupancy()
    {
      return $this->MaxOccupancy;
    }

    /**
     * @param int $MaxOccupancy
     * @return JP_RoomOccupancy
     */
    public function setMaxOccupancy($MaxOccupancy)
    {
      $this->MaxOccupancy = $MaxOccupancy;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinOccupancy()
    {
      return $this->MinOccupancy;
    }

    /**
     * @param int $MinOccupancy
     * @return JP_RoomOccupancy
     */
    public function setMinOccupancy($MinOccupancy)
    {
      $this->MinOccupancy = $MinOccupancy;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdults()
    {
      return $this->Adults;
    }

    /**
     * @param int $Adults
     * @return JP_RoomOccupancy
     */
    public function setAdults($Adults)
    {
      $this->Adults = $Adults;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxAdults()
    {
      return $this->MaxAdults;
    }

    /**
     * @param int $MaxAdults
     * @return JP_RoomOccupancy
     */
    public function setMaxAdults($MaxAdults)
    {
      $this->MaxAdults = $MaxAdults;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinAdults()
    {
      return $this->MinAdults;
    }

    /**
     * @param int $MinAdults
     * @return JP_RoomOccupancy
     */
    public function setMinAdults($MinAdults)
    {
      $this->MinAdults = $MinAdults;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildren()
    {
      return $this->Children;
    }

    /**
     * @param int $Children
     * @return JP_RoomOccupancy
     */
    public function setChildren($Children)
    {
      $this->Children = $Children;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxChildren()
    {
      return $this->MaxChildren;
    }

    /**
     * @param int $MaxChildren
     * @return JP_RoomOccupancy
     */
    public function setMaxChildren($MaxChildren)
    {
      $this->MaxChildren = $MaxChildren;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinChildren()
    {
      return $this->MinChildren;
    }

    /**
     * @param int $MinChildren
     * @return JP_RoomOccupancy
     */
    public function setMinChildren($MinChildren)
    {
      $this->MinChildren = $MinChildren;
      return $this;
    }

}

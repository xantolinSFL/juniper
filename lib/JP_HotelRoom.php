<?php

class JP_HotelRoom
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var JP_RoomCategory $RoomCategory
     */
    protected $RoomCategory = null;

    /**
     * @var JP_RoomOccupancy $RoomOccupancy
     */
    protected $RoomOccupancy = null;

    /**
     * @var ArrayOfJP_ImageLong $Images
     */
    protected $Images = null;

    /**
     * @var JP_HotelRoomSize $Size
     */
    protected $Size = null;

    /**
     * @var int $Units
     */
    protected $Units = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var int $AvailRooms
     */
    protected $AvailRooms = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param int $Units
     * @param string $Source
     * @param int $AvailRooms
     * @param string $Code
     */
    public function __construct($Units, $Source, $AvailRooms, $Code)
    {
      $this->Units = $Units;
      $this->Source = $Source;
      $this->AvailRooms = $AvailRooms;
      $this->Code = $Code;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_HotelRoom
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_HotelRoom
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return JP_RoomCategory
     */
    public function getRoomCategory()
    {
      return $this->RoomCategory;
    }

    /**
     * @param JP_RoomCategory $RoomCategory
     * @return JP_HotelRoom
     */
    public function setRoomCategory($RoomCategory)
    {
      $this->RoomCategory = $RoomCategory;
      return $this;
    }

    /**
     * @return JP_RoomOccupancy
     */
    public function getRoomOccupancy()
    {
      return $this->RoomOccupancy;
    }

    /**
     * @param JP_RoomOccupancy $RoomOccupancy
     * @return JP_HotelRoom
     */
    public function setRoomOccupancy($RoomOccupancy)
    {
      $this->RoomOccupancy = $RoomOccupancy;
      return $this;
    }

    /**
     * @return ArrayOfJP_ImageLong
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfJP_ImageLong $Images
     * @return JP_HotelRoom
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return JP_HotelRoomSize
     */
    public function getSize()
    {
      return $this->Size;
    }

    /**
     * @param JP_HotelRoomSize $Size
     * @return JP_HotelRoom
     */
    public function setSize($Size)
    {
      $this->Size = $Size;
      return $this;
    }

    /**
     * @return int
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param int $Units
     * @return JP_HotelRoom
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return JP_HotelRoom
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return int
     */
    public function getAvailRooms()
    {
      return $this->AvailRooms;
    }

    /**
     * @param int $AvailRooms
     * @return JP_HotelRoom
     */
    public function setAvailRooms($AvailRooms)
    {
      $this->AvailRooms = $AvailRooms;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_HotelRoom
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

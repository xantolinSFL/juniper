<?php

namespace Juniper\Webservice;

class JP_HotelRelPaxDist extends JP_RelPaxDist
{

    /**
     * @var ArrayOfJP_RoomCategory $RoomCategories
     */
    protected $RoomCategories = null;

    /**
     * @var ArrayOfJP_HotelRoomCode $Rooms
     */
    protected $Rooms = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfJP_RoomCategory
     */
    public function getRoomCategories()
    {
      return $this->RoomCategories;
    }

    /**
     * @param ArrayOfJP_RoomCategory $RoomCategories
     * @return JP_HotelRelPaxDist
     */
    public function setRoomCategories($RoomCategories)
    {
      $this->RoomCategories = $RoomCategories;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelRoomCode
     */
    public function getRooms()
    {
      return $this->Rooms;
    }

    /**
     * @param ArrayOfJP_HotelRoomCode $Rooms
     * @return JP_HotelRelPaxDist
     */
    public function setRooms($Rooms)
    {
      $this->Rooms = $Rooms;
      return $this;
    }

}

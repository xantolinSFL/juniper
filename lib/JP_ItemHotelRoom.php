<?php

namespace Juniper\Webservice;

class JP_ItemHotelRoom
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
     * @var ArrayOfJP_RelPax $RelPaxes
     */
    protected $RelPaxes = null;

    /**
     * @var ArrayOfJP_HotelDailyContracts $Contracts
     */
    protected $Contracts = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @param string $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
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
     * @return JP_ItemHotelRoom
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
     * @return JP_ItemHotelRoom
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
     * @return JP_ItemHotelRoom
     */
    public function setRoomCategory($RoomCategory)
    {
      $this->RoomCategory = $RoomCategory;
      return $this;
    }

    /**
     * @return ArrayOfJP_RelPax
     */
    public function getRelPaxes()
    {
      return $this->RelPaxes;
    }

    /**
     * @param ArrayOfJP_RelPax $RelPaxes
     * @return JP_ItemHotelRoom
     */
    public function setRelPaxes($RelPaxes)
    {
      $this->RelPaxes = $RelPaxes;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelDailyContracts
     */
    public function getContracts()
    {
      return $this->Contracts;
    }

    /**
     * @param ArrayOfJP_HotelDailyContracts $Contracts
     * @return JP_ItemHotelRoom
     */
    public function setContracts($Contracts)
    {
      $this->Contracts = $Contracts;
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
     * @return JP_ItemHotelRoom
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}

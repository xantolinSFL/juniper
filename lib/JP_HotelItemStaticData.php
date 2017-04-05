<?php

namespace Juniper\Webservice;

class JP_HotelItemStaticData
{

    /**
     * @var ArrayOfJP_RoomCategory $RoomCategoryList
     */
    protected $RoomCategoryList = null;

    /**
     * @var ArrayOfJP_HotelRoomCode $RoomList
     */
    protected $RoomList = null;

    /**
     * @var ArrayOfJP_HotelCategory $HotelCategoryList
     */
    protected $HotelCategoryList = null;

    /**
     * @var ArrayOfJP_HotelType $HotelTypeList
     */
    protected $HotelTypeList = null;

    /**
     * @var ArrayOfJP_Board $BoardList
     */
    protected $BoardList = null;

    /**
     * @var ArrayOfJP_Board $BoardCodeList
     */
    protected $BoardCodeList = null;

    /**
     * @var ArrayOfJP_OfferSupplementType $OfferSupplementTypeList
     */
    protected $OfferSupplementTypeList = null;

    /**
     * @var ArrayOfJP_SpecialSupplementType $SpecialSupplementTypeList
     */
    protected $SpecialSupplementTypeList = null;

    /**
     * @var ArrayOfJP_HotelContractType $ContractTypeList
     */
    protected $ContractTypeList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_RoomCategory
     */
    public function getRoomCategoryList()
    {
      return $this->RoomCategoryList;
    }

    /**
     * @param ArrayOfJP_RoomCategory $RoomCategoryList
     * @return JP_HotelItemStaticData
     */
    public function setRoomCategoryList($RoomCategoryList)
    {
      $this->RoomCategoryList = $RoomCategoryList;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelRoomCode
     */
    public function getRoomList()
    {
      return $this->RoomList;
    }

    /**
     * @param ArrayOfJP_HotelRoomCode $RoomList
     * @return JP_HotelItemStaticData
     */
    public function setRoomList($RoomList)
    {
      $this->RoomList = $RoomList;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelCategory
     */
    public function getHotelCategoryList()
    {
      return $this->HotelCategoryList;
    }

    /**
     * @param ArrayOfJP_HotelCategory $HotelCategoryList
     * @return JP_HotelItemStaticData
     */
    public function setHotelCategoryList($HotelCategoryList)
    {
      $this->HotelCategoryList = $HotelCategoryList;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelType
     */
    public function getHotelTypeList()
    {
      return $this->HotelTypeList;
    }

    /**
     * @param ArrayOfJP_HotelType $HotelTypeList
     * @return JP_HotelItemStaticData
     */
    public function setHotelTypeList($HotelTypeList)
    {
      $this->HotelTypeList = $HotelTypeList;
      return $this;
    }

    /**
     * @return ArrayOfJP_Board
     */
    public function getBoardList()
    {
      return $this->BoardList;
    }

    /**
     * @param ArrayOfJP_Board $BoardList
     * @return JP_HotelItemStaticData
     */
    public function setBoardList($BoardList)
    {
      $this->BoardList = $BoardList;
      return $this;
    }

    /**
     * @return ArrayOfJP_Board
     */
    public function getBoardCodeList()
    {
      return $this->BoardCodeList;
    }

    /**
     * @param ArrayOfJP_Board $BoardCodeList
     * @return JP_HotelItemStaticData
     */
    public function setBoardCodeList($BoardCodeList)
    {
      $this->BoardCodeList = $BoardCodeList;
      return $this;
    }

    /**
     * @return ArrayOfJP_OfferSupplementType
     */
    public function getOfferSupplementTypeList()
    {
      return $this->OfferSupplementTypeList;
    }

    /**
     * @param ArrayOfJP_OfferSupplementType $OfferSupplementTypeList
     * @return JP_HotelItemStaticData
     */
    public function setOfferSupplementTypeList($OfferSupplementTypeList)
    {
      $this->OfferSupplementTypeList = $OfferSupplementTypeList;
      return $this;
    }

    /**
     * @return ArrayOfJP_SpecialSupplementType
     */
    public function getSpecialSupplementTypeList()
    {
      return $this->SpecialSupplementTypeList;
    }

    /**
     * @param ArrayOfJP_SpecialSupplementType $SpecialSupplementTypeList
     * @return JP_HotelItemStaticData
     */
    public function setSpecialSupplementTypeList($SpecialSupplementTypeList)
    {
      $this->SpecialSupplementTypeList = $SpecialSupplementTypeList;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelContractType
     */
    public function getContractTypeList()
    {
      return $this->ContractTypeList;
    }

    /**
     * @param ArrayOfJP_HotelContractType $ContractTypeList
     * @return JP_HotelItemStaticData
     */
    public function setContractTypeList($ContractTypeList)
    {
      $this->ContractTypeList = $ContractTypeList;
      return $this;
    }

}

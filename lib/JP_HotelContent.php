<?php

namespace Juniper\Webservice;

class JP_HotelContent
{

    /**
     * @var string $HotelName
     */
    protected $HotelName = null;

    /**
     * @var JP_Zone $Zone
     */
    protected $Zone = null;

    /**
     * @var JP_HotelCategory $HotelCategory
     */
    protected $HotelCategory = null;

    /**
     * @var JP_HotelType $HotelType
     */
    protected $HotelType = null;

    /**
     * @var JP_LabelType $Label
     */
    protected $Label = null;

    /**
     * @var JP_SegmentHotel $SegmentHotel
     */
    protected $SegmentHotel = null;

    /**
     * @var JP_AddressType $Address
     */
    protected $Address = null;

    /**
     * @var JP_ContactInfo $ContactInfo
     */
    protected $ContactInfo = null;

    /**
     * @var ArrayOfJP_ImageLong $Images
     */
    protected $Images = null;

    /**
     * @var ArrayOfJP_Description $Descriptions
     */
    protected $Descriptions = null;

    /**
     * @var ArrayOfJP_Feature $Features
     */
    protected $Features = null;

    /**
     * @var ArrayOfJP_PointOfInterest $PointsOfInterest
     */
    protected $PointsOfInterest = null;

    /**
     * @var ArrayOfJP_ContentProvider $ContentProviders
     */
    protected $ContentProviders = null;

    /**
     * @var JP_HotelTimeInformation $TimeInformation
     */
    protected $TimeInformation = null;

    /**
     * @var ArrayOfJP_HotelRoom $HotelRooms
     */
    protected $HotelRooms = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $JPCode
     */
    protected $JPCode = null;

    /**
     * @param string $Code
     * @param string $JPCode
     */
    public function __construct($Code, $JPCode)
    {
      $this->Code = $Code;
      $this->JPCode = $JPCode;
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
      return $this->HotelName;
    }

    /**
     * @param string $HotelName
     * @return JP_HotelContent
     */
    public function setHotelName($HotelName)
    {
      $this->HotelName = $HotelName;
      return $this;
    }

    /**
     * @return JP_Zone
     */
    public function getZone()
    {
      return $this->Zone;
    }

    /**
     * @param JP_Zone $Zone
     * @return JP_HotelContent
     */
    public function setZone($Zone)
    {
      $this->Zone = $Zone;
      return $this;
    }

    /**
     * @return JP_HotelCategory
     */
    public function getHotelCategory()
    {
      return $this->HotelCategory;
    }

    /**
     * @param JP_HotelCategory $HotelCategory
     * @return JP_HotelContent
     */
    public function setHotelCategory($HotelCategory)
    {
      $this->HotelCategory = $HotelCategory;
      return $this;
    }

    /**
     * @return JP_HotelType
     */
    public function getHotelType()
    {
      return $this->HotelType;
    }

    /**
     * @param JP_HotelType $HotelType
     * @return JP_HotelContent
     */
    public function setHotelType($HotelType)
    {
      $this->HotelType = $HotelType;
      return $this;
    }

    /**
     * @return JP_LabelType
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param JP_LabelType $Label
     * @return JP_HotelContent
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return JP_SegmentHotel
     */
    public function getSegmentHotel()
    {
      return $this->SegmentHotel;
    }

    /**
     * @param JP_SegmentHotel $SegmentHotel
     * @return JP_HotelContent
     */
    public function setSegmentHotel($SegmentHotel)
    {
      $this->SegmentHotel = $SegmentHotel;
      return $this;
    }

    /**
     * @return JP_AddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param JP_AddressType $Address
     * @return JP_HotelContent
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return JP_ContactInfo
     */
    public function getContactInfo()
    {
      return $this->ContactInfo;
    }

    /**
     * @param JP_ContactInfo $ContactInfo
     * @return JP_HotelContent
     */
    public function setContactInfo($ContactInfo)
    {
      $this->ContactInfo = $ContactInfo;
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
     * @return JP_HotelContent
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return ArrayOfJP_Description
     */
    public function getDescriptions()
    {
      return $this->Descriptions;
    }

    /**
     * @param ArrayOfJP_Description $Descriptions
     * @return JP_HotelContent
     */
    public function setDescriptions($Descriptions)
    {
      $this->Descriptions = $Descriptions;
      return $this;
    }

    /**
     * @return ArrayOfJP_Feature
     */
    public function getFeatures()
    {
      return $this->Features;
    }

    /**
     * @param ArrayOfJP_Feature $Features
     * @return JP_HotelContent
     */
    public function setFeatures($Features)
    {
      $this->Features = $Features;
      return $this;
    }

    /**
     * @return ArrayOfJP_PointOfInterest
     */
    public function getPointsOfInterest()
    {
      return $this->PointsOfInterest;
    }

    /**
     * @param ArrayOfJP_PointOfInterest $PointsOfInterest
     * @return JP_HotelContent
     */
    public function setPointsOfInterest($PointsOfInterest)
    {
      $this->PointsOfInterest = $PointsOfInterest;
      return $this;
    }

    /**
     * @return ArrayOfJP_ContentProvider
     */
    public function getContentProviders()
    {
      return $this->ContentProviders;
    }

    /**
     * @param ArrayOfJP_ContentProvider $ContentProviders
     * @return JP_HotelContent
     */
    public function setContentProviders($ContentProviders)
    {
      $this->ContentProviders = $ContentProviders;
      return $this;
    }

    /**
     * @return JP_HotelTimeInformation
     */
    public function getTimeInformation()
    {
      return $this->TimeInformation;
    }

    /**
     * @param JP_HotelTimeInformation $TimeInformation
     * @return JP_HotelContent
     */
    public function setTimeInformation($TimeInformation)
    {
      $this->TimeInformation = $TimeInformation;
      return $this;
    }

    /**
     * @return ArrayOfJP_HotelRoom
     */
    public function getHotelRooms()
    {
      return $this->HotelRooms;
    }

    /**
     * @param ArrayOfJP_HotelRoom $HotelRooms
     * @return JP_HotelContent
     */
    public function setHotelRooms($HotelRooms)
    {
      $this->HotelRooms = $HotelRooms;
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
     * @return JP_HotelContent
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getJPCode()
    {
      return $this->JPCode;
    }

    /**
     * @param string $JPCode
     * @return JP_HotelContent
     */
    public function setJPCode($JPCode)
    {
      $this->JPCode = $JPCode;
      return $this;
    }

}

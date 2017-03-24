<?php

class JP_HotelInfo
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
     * @var ArrayOfString1 $Images
     */
    protected $Images = null;

    /**
     * @var JP_HotelChain $HotelChain
     */
    protected $HotelChain = null;

    /**
     * @var JP_HotelCategory $HotelCategory
     */
    protected $HotelCategory = null;

    /**
     * @var JP_HotelType $HotelType
     */
    protected $HotelType = null;

    /**
     * @var JP_PropertyType $PropertyType
     */
    protected $PropertyType = null;

    /**
     * @var JP_LabelType $Label
     */
    protected $Label = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $Latitude
     */
    protected $Latitude = null;

    /**
     * @var string $Longitude
     */
    protected $Longitude = null;

    /**
     * @var string $DeepLink
     */
    protected $DeepLink = null;

    /**
     * @var ArrayOfJP_ContentProvider $ContentProviders
     */
    protected $ContentProviders = null;

    
    public function __construct()
    {
    
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
     * @return JP_HotelInfo
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
     * @return JP_HotelInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfString1
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfString1 $Images
     * @return JP_HotelInfo
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return JP_HotelChain
     */
    public function getHotelChain()
    {
      return $this->HotelChain;
    }

    /**
     * @param JP_HotelChain $HotelChain
     * @return JP_HotelInfo
     */
    public function setHotelChain($HotelChain)
    {
      $this->HotelChain = $HotelChain;
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
     * @return JP_HotelInfo
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
     * @return JP_HotelInfo
     */
    public function setHotelType($HotelType)
    {
      $this->HotelType = $HotelType;
      return $this;
    }

    /**
     * @return JP_PropertyType
     */
    public function getPropertyType()
    {
      return $this->PropertyType;
    }

    /**
     * @param JP_PropertyType $PropertyType
     * @return JP_HotelInfo
     */
    public function setPropertyType($PropertyType)
    {
      $this->PropertyType = $PropertyType;
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
     * @return JP_HotelInfo
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return JP_HotelInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return JP_HotelInfo
     */
    public function setLatitude($Latitude)
    {
      $this->Latitude = $Latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return JP_HotelInfo
     */
    public function setLongitude($Longitude)
    {
      $this->Longitude = $Longitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeepLink()
    {
      return $this->DeepLink;
    }

    /**
     * @param string $DeepLink
     * @return JP_HotelInfo
     */
    public function setDeepLink($DeepLink)
    {
      $this->DeepLink = $DeepLink;
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
     * @return JP_HotelInfo
     */
    public function setContentProviders($ContentProviders)
    {
      $this->ContentProviders = $ContentProviders;
      return $this;
    }

}

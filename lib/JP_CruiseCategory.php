<?php

class JP_CruiseCategory
{

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var JP_CruiseAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var ArrayOfJP_CruiseCabin $Cabins
     */
    protected $Cabins = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JP_Description $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfString1 $Images
     */
    protected $Images = null;

    /**
     * @var ArrayOfJP_ImageLong $ImagesLong
     */
    protected $ImagesLong = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $DeckLoc
     */
    protected $DeckLoc = null;

    /**
     * @var string $SelectionCode
     */
    protected $SelectionCode = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param string $Code
     * @param string $DeckLoc
     * @param string $SelectionCode
     * @param string $RatePlanCode
     */
    public function __construct($Code, $DeckLoc, $SelectionCode, $RatePlanCode)
    {
      $this->Code = $Code;
      $this->DeckLoc = $DeckLoc;
      $this->SelectionCode = $SelectionCode;
      $this->RatePlanCode = $RatePlanCode;
    }

    /**
     * @return ArrayOfJP_Price
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfJP_Price $Prices
     * @return JP_CruiseCategory
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return JP_CruiseAdditionalElements
     */
    public function getAdditionalElements()
    {
      return $this->AdditionalElements;
    }

    /**
     * @param JP_CruiseAdditionalElements $AdditionalElements
     * @return JP_CruiseCategory
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruiseCabin
     */
    public function getCabins()
    {
      return $this->Cabins;
    }

    /**
     * @param ArrayOfJP_CruiseCabin $Cabins
     * @return JP_CruiseCategory
     */
    public function setCabins($Cabins)
    {
      $this->Cabins = $Cabins;
      return $this;
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
     * @return JP_CruiseCategory
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return JP_Description
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param JP_Description $Description
     * @return JP_CruiseCategory
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
     * @return JP_CruiseCategory
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return ArrayOfJP_ImageLong
     */
    public function getImagesLong()
    {
      return $this->ImagesLong;
    }

    /**
     * @param ArrayOfJP_ImageLong $ImagesLong
     * @return JP_CruiseCategory
     */
    public function setImagesLong($ImagesLong)
    {
      $this->ImagesLong = $ImagesLong;
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
     * @return JP_CruiseCategory
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeckLoc()
    {
      return $this->DeckLoc;
    }

    /**
     * @param string $DeckLoc
     * @return JP_CruiseCategory
     */
    public function setDeckLoc($DeckLoc)
    {
      $this->DeckLoc = $DeckLoc;
      return $this;
    }

    /**
     * @return string
     */
    public function getSelectionCode()
    {
      return $this->SelectionCode;
    }

    /**
     * @param string $SelectionCode
     * @return JP_CruiseCategory
     */
    public function setSelectionCode($SelectionCode)
    {
      $this->SelectionCode = $SelectionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return JP_CruiseCategory
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}

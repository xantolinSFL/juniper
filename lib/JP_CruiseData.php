<?php

class JP_CruiseData
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JP_Description $Description
     */
    protected $Description = null;

    /**
     * @var JP_Description $LongDescription
     */
    protected $LongDescription = null;

    /**
     * @var ArrayOfString1 $Images
     */
    protected $Images = null;

    /**
     * @var ArrayOfJP_ImageLong $ImagesLong
     */
    protected $ImagesLong = null;

    /**
     * @var JP_Ship $Ship
     */
    protected $Ship = null;

    /**
     * @var ArrayOfJP_CruiseCategory $Categories
     */
    protected $Categories = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $Code
     */
    public function __construct($Code)
    {
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
     * @return JP_CruiseData
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
     * @return JP_CruiseData
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return JP_Description
     */
    public function getLongDescription()
    {
      return $this->LongDescription;
    }

    /**
     * @param JP_Description $LongDescription
     * @return JP_CruiseData
     */
    public function setLongDescription($LongDescription)
    {
      $this->LongDescription = $LongDescription;
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
     * @return JP_CruiseData
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
     * @return JP_CruiseData
     */
    public function setImagesLong($ImagesLong)
    {
      $this->ImagesLong = $ImagesLong;
      return $this;
    }

    /**
     * @return JP_Ship
     */
    public function getShip()
    {
      return $this->Ship;
    }

    /**
     * @param JP_Ship $Ship
     * @return JP_CruiseData
     */
    public function setShip($Ship)
    {
      $this->Ship = $Ship;
      return $this;
    }

    /**
     * @return ArrayOfJP_CruiseCategory
     */
    public function getCategories()
    {
      return $this->Categories;
    }

    /**
     * @param ArrayOfJP_CruiseCategory $Categories
     * @return JP_CruiseData
     */
    public function setCategories($Categories)
    {
      $this->Categories = $Categories;
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
     * @return JP_CruiseData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

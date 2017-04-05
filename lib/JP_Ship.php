<?php

namespace Juniper\Webservice;

class JP_Ship
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var JP_Shipping $Shipping
     */
    protected $Shipping = null;

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
     * @var JP_CruiseList[] $Cruises
     */
    protected $Cruises = null;

    /**
     * @var JP_Overview[] $Overview
     */
    protected $Overview = null;

    /**
     * @var string $Tipstandards
     */
    protected $Tipstandards = null;

    /**
     * @var JP_CruiseServices $Serv
     */
    protected $Serv = null;

    /**
     * @var JP_CruiseSportServices $Sport
     */
    protected $Sport = null;

    /**
     * @var JP_CruiseChildServices $Nin
     */
    protected $Nin = null;

    /**
     * @var JP_CruiseCabinServices $Cabin
     */
    protected $Cabin = null;

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
     * @return JP_Ship
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return JP_Shipping
     */
    public function getShipping()
    {
      return $this->Shipping;
    }

    /**
     * @param JP_Shipping $Shipping
     * @return JP_Ship
     */
    public function setShipping($Shipping)
    {
      $this->Shipping = $Shipping;
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
     * @return JP_Ship
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
     * @return JP_Ship
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
     * @return JP_Ship
     */
    public function setImagesLong($ImagesLong)
    {
      $this->ImagesLong = $ImagesLong;
      return $this;
    }

    /**
     * @return JP_CruiseList[]
     */
    public function getCruises()
    {
      return $this->Cruises;
    }

    /**
     * @param JP_CruiseList[] $Cruises
     * @return JP_Ship
     */
    public function setCruises(array $Cruises = null)
    {
      $this->Cruises = $Cruises;
      return $this;
    }

    /**
     * @return JP_Overview[]
     */
    public function getOverview()
    {
      return $this->Overview;
    }

    /**
     * @param JP_Overview[] $Overview
     * @return JP_Ship
     */
    public function setOverview(array $Overview = null)
    {
      $this->Overview = $Overview;
      return $this;
    }

    /**
     * @return string
     */
    public function getTipstandards()
    {
      return $this->Tipstandards;
    }

    /**
     * @param string $Tipstandards
     * @return JP_Ship
     */
    public function setTipstandards($Tipstandards)
    {
      $this->Tipstandards = $Tipstandards;
      return $this;
    }

    /**
     * @return JP_CruiseServices
     */
    public function getServ()
    {
      return $this->Serv;
    }

    /**
     * @param JP_CruiseServices $Serv
     * @return JP_Ship
     */
    public function setServ($Serv)
    {
      $this->Serv = $Serv;
      return $this;
    }

    /**
     * @return JP_CruiseSportServices
     */
    public function getSport()
    {
      return $this->Sport;
    }

    /**
     * @param JP_CruiseSportServices $Sport
     * @return JP_Ship
     */
    public function setSport($Sport)
    {
      $this->Sport = $Sport;
      return $this;
    }

    /**
     * @return JP_CruiseChildServices
     */
    public function getNin()
    {
      return $this->Nin;
    }

    /**
     * @param JP_CruiseChildServices $Nin
     * @return JP_Ship
     */
    public function setNin($Nin)
    {
      $this->Nin = $Nin;
      return $this;
    }

    /**
     * @return JP_CruiseCabinServices
     */
    public function getCabin()
    {
      return $this->Cabin;
    }

    /**
     * @param JP_CruiseCabinServices $Cabin
     * @return JP_Ship
     */
    public function setCabin($Cabin)
    {
      $this->Cabin = $Cabin;
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
     * @return JP_Ship
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

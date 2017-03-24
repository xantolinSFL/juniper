<?php

class JP_CruiseServices
{

    /**
     * @var int $Barlounges
     */
    protected $Barlounges = null;

    /**
     * @var string $Languages
     */
    protected $Languages = null;

    /**
     * @var int $Jacuzzies
     */
    protected $Jacuzzies = null;

    /**
     * @var int $Restaurants
     */
    protected $Restaurants = null;

    /**
     * @var int $Stores
     */
    protected $Stores = null;

    /**
     * @var int $Lifts
     */
    protected $Lifts = null;

    /**
     * @var boolean $Casino
     */
    protected $Casino = null;

    /**
     * @var boolean $Cinema
     */
    protected $Cinema = null;

    /**
     * @var boolean $Beautysalons
     */
    protected $Beautysalons = null;

    /**
     * @var boolean $Chapel
     */
    protected $Chapel = null;

    /**
     * @var boolean $Library
     */
    protected $Library = null;

    /**
     * @var boolean $Theater
     */
    protected $Theater = null;

    /**
     * @var boolean $Disco
     */
    protected $Disco = null;

    /**
     * @var boolean $Spa
     */
    protected $Spa = null;

    /**
     * @var boolean $Playroom
     */
    protected $Playroom = null;

    /**
     * @var boolean $Wedding
     */
    protected $Wedding = null;

    /**
     * @var boolean $Internet
     */
    protected $Internet = null;

    /**
     * @var boolean $Laundry
     */
    protected $Laundry = null;

    /**
     * @var boolean $Autolaundry
     */
    protected $Autolaundry = null;

    /**
     * @var boolean $Showroom
     */
    protected $Showroom = null;

    /**
     * @param boolean $Casino
     * @param boolean $Cinema
     * @param boolean $Beautysalons
     * @param boolean $Chapel
     * @param boolean $Library
     * @param boolean $Theater
     * @param boolean $Disco
     * @param boolean $Spa
     * @param boolean $Playroom
     * @param boolean $Wedding
     * @param boolean $Internet
     * @param boolean $Laundry
     * @param boolean $Autolaundry
     * @param boolean $Showroom
     */
    public function __construct($Casino, $Cinema, $Beautysalons, $Chapel, $Library, $Theater, $Disco, $Spa, $Playroom, $Wedding, $Internet, $Laundry, $Autolaundry, $Showroom)
    {
      $this->Casino = $Casino;
      $this->Cinema = $Cinema;
      $this->Beautysalons = $Beautysalons;
      $this->Chapel = $Chapel;
      $this->Library = $Library;
      $this->Theater = $Theater;
      $this->Disco = $Disco;
      $this->Spa = $Spa;
      $this->Playroom = $Playroom;
      $this->Wedding = $Wedding;
      $this->Internet = $Internet;
      $this->Laundry = $Laundry;
      $this->Autolaundry = $Autolaundry;
      $this->Showroom = $Showroom;
    }

    /**
     * @return int
     */
    public function getBarlounges()
    {
      return $this->Barlounges;
    }

    /**
     * @param int $Barlounges
     * @return JP_CruiseServices
     */
    public function setBarlounges($Barlounges)
    {
      $this->Barlounges = $Barlounges;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguages()
    {
      return $this->Languages;
    }

    /**
     * @param string $Languages
     * @return JP_CruiseServices
     */
    public function setLanguages($Languages)
    {
      $this->Languages = $Languages;
      return $this;
    }

    /**
     * @return int
     */
    public function getJacuzzies()
    {
      return $this->Jacuzzies;
    }

    /**
     * @param int $Jacuzzies
     * @return JP_CruiseServices
     */
    public function setJacuzzies($Jacuzzies)
    {
      $this->Jacuzzies = $Jacuzzies;
      return $this;
    }

    /**
     * @return int
     */
    public function getRestaurants()
    {
      return $this->Restaurants;
    }

    /**
     * @param int $Restaurants
     * @return JP_CruiseServices
     */
    public function setRestaurants($Restaurants)
    {
      $this->Restaurants = $Restaurants;
      return $this;
    }

    /**
     * @return int
     */
    public function getStores()
    {
      return $this->Stores;
    }

    /**
     * @param int $Stores
     * @return JP_CruiseServices
     */
    public function setStores($Stores)
    {
      $this->Stores = $Stores;
      return $this;
    }

    /**
     * @return int
     */
    public function getLifts()
    {
      return $this->Lifts;
    }

    /**
     * @param int $Lifts
     * @return JP_CruiseServices
     */
    public function setLifts($Lifts)
    {
      $this->Lifts = $Lifts;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCasino()
    {
      return $this->Casino;
    }

    /**
     * @param boolean $Casino
     * @return JP_CruiseServices
     */
    public function setCasino($Casino)
    {
      $this->Casino = $Casino;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCinema()
    {
      return $this->Cinema;
    }

    /**
     * @param boolean $Cinema
     * @return JP_CruiseServices
     */
    public function setCinema($Cinema)
    {
      $this->Cinema = $Cinema;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBeautysalons()
    {
      return $this->Beautysalons;
    }

    /**
     * @param boolean $Beautysalons
     * @return JP_CruiseServices
     */
    public function setBeautysalons($Beautysalons)
    {
      $this->Beautysalons = $Beautysalons;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChapel()
    {
      return $this->Chapel;
    }

    /**
     * @param boolean $Chapel
     * @return JP_CruiseServices
     */
    public function setChapel($Chapel)
    {
      $this->Chapel = $Chapel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLibrary()
    {
      return $this->Library;
    }

    /**
     * @param boolean $Library
     * @return JP_CruiseServices
     */
    public function setLibrary($Library)
    {
      $this->Library = $Library;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTheater()
    {
      return $this->Theater;
    }

    /**
     * @param boolean $Theater
     * @return JP_CruiseServices
     */
    public function setTheater($Theater)
    {
      $this->Theater = $Theater;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisco()
    {
      return $this->Disco;
    }

    /**
     * @param boolean $Disco
     * @return JP_CruiseServices
     */
    public function setDisco($Disco)
    {
      $this->Disco = $Disco;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSpa()
    {
      return $this->Spa;
    }

    /**
     * @param boolean $Spa
     * @return JP_CruiseServices
     */
    public function setSpa($Spa)
    {
      $this->Spa = $Spa;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPlayroom()
    {
      return $this->Playroom;
    }

    /**
     * @param boolean $Playroom
     * @return JP_CruiseServices
     */
    public function setPlayroom($Playroom)
    {
      $this->Playroom = $Playroom;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWedding()
    {
      return $this->Wedding;
    }

    /**
     * @param boolean $Wedding
     * @return JP_CruiseServices
     */
    public function setWedding($Wedding)
    {
      $this->Wedding = $Wedding;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInternet()
    {
      return $this->Internet;
    }

    /**
     * @param boolean $Internet
     * @return JP_CruiseServices
     */
    public function setInternet($Internet)
    {
      $this->Internet = $Internet;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLaundry()
    {
      return $this->Laundry;
    }

    /**
     * @param boolean $Laundry
     * @return JP_CruiseServices
     */
    public function setLaundry($Laundry)
    {
      $this->Laundry = $Laundry;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutolaundry()
    {
      return $this->Autolaundry;
    }

    /**
     * @param boolean $Autolaundry
     * @return JP_CruiseServices
     */
    public function setAutolaundry($Autolaundry)
    {
      $this->Autolaundry = $Autolaundry;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowroom()
    {
      return $this->Showroom;
    }

    /**
     * @param boolean $Showroom
     * @return JP_CruiseServices
     */
    public function setShowroom($Showroom)
    {
      $this->Showroom = $Showroom;
      return $this;
    }

}

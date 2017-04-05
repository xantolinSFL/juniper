<?php

namespace Juniper\Webservice;

class JP_CruiseSportServices
{

    /**
     * @var int $Pools
     */
    protected $Pools = null;

    /**
     * @var int $Indorpools
     */
    protected $Indorpools = null;

    /**
     * @var int $Extpools
     */
    protected $Extpools = null;

    /**
     * @var boolean $Basketball
     */
    protected $Basketball = null;

    /**
     * @var boolean $Tennis
     */
    protected $Tennis = null;

    /**
     * @var boolean $Golf
     */
    protected $Golf = null;

    /**
     * @var boolean $Jogging
     */
    protected $Jogging = null;

    /**
     * @var boolean $Minigolf
     */
    protected $Minigolf = null;

    /**
     * @var boolean $Rocodrom
     */
    protected $Rocodrom = null;

    /**
     * @var boolean $Pathinhileo
     */
    protected $Pathinhileo = null;

    /**
     * @var boolean $Gym
     */
    protected $Gym = null;

    /**
     * @var boolean $Aquaticplant
     */
    protected $Aquaticplant = null;

    /**
     * @param boolean $Basketball
     * @param boolean $Tennis
     * @param boolean $Golf
     * @param boolean $Jogging
     * @param boolean $Minigolf
     * @param boolean $Rocodrom
     * @param boolean $Pathinhileo
     * @param boolean $Gym
     * @param boolean $Aquaticplant
     */
    public function __construct($Basketball, $Tennis, $Golf, $Jogging, $Minigolf, $Rocodrom, $Pathinhileo, $Gym, $Aquaticplant)
    {
      $this->Basketball = $Basketball;
      $this->Tennis = $Tennis;
      $this->Golf = $Golf;
      $this->Jogging = $Jogging;
      $this->Minigolf = $Minigolf;
      $this->Rocodrom = $Rocodrom;
      $this->Pathinhileo = $Pathinhileo;
      $this->Gym = $Gym;
      $this->Aquaticplant = $Aquaticplant;
    }

    /**
     * @return int
     */
    public function getPools()
    {
      return $this->Pools;
    }

    /**
     * @param int $Pools
     * @return JP_CruiseSportServices
     */
    public function setPools($Pools)
    {
      $this->Pools = $Pools;
      return $this;
    }

    /**
     * @return int
     */
    public function getIndorpools()
    {
      return $this->Indorpools;
    }

    /**
     * @param int $Indorpools
     * @return JP_CruiseSportServices
     */
    public function setIndorpools($Indorpools)
    {
      $this->Indorpools = $Indorpools;
      return $this;
    }

    /**
     * @return int
     */
    public function getExtpools()
    {
      return $this->Extpools;
    }

    /**
     * @param int $Extpools
     * @return JP_CruiseSportServices
     */
    public function setExtpools($Extpools)
    {
      $this->Extpools = $Extpools;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBasketball()
    {
      return $this->Basketball;
    }

    /**
     * @param boolean $Basketball
     * @return JP_CruiseSportServices
     */
    public function setBasketball($Basketball)
    {
      $this->Basketball = $Basketball;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTennis()
    {
      return $this->Tennis;
    }

    /**
     * @param boolean $Tennis
     * @return JP_CruiseSportServices
     */
    public function setTennis($Tennis)
    {
      $this->Tennis = $Tennis;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGolf()
    {
      return $this->Golf;
    }

    /**
     * @param boolean $Golf
     * @return JP_CruiseSportServices
     */
    public function setGolf($Golf)
    {
      $this->Golf = $Golf;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getJogging()
    {
      return $this->Jogging;
    }

    /**
     * @param boolean $Jogging
     * @return JP_CruiseSportServices
     */
    public function setJogging($Jogging)
    {
      $this->Jogging = $Jogging;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMinigolf()
    {
      return $this->Minigolf;
    }

    /**
     * @param boolean $Minigolf
     * @return JP_CruiseSportServices
     */
    public function setMinigolf($Minigolf)
    {
      $this->Minigolf = $Minigolf;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRocodrom()
    {
      return $this->Rocodrom;
    }

    /**
     * @param boolean $Rocodrom
     * @return JP_CruiseSportServices
     */
    public function setRocodrom($Rocodrom)
    {
      $this->Rocodrom = $Rocodrom;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPathinhileo()
    {
      return $this->Pathinhileo;
    }

    /**
     * @param boolean $Pathinhileo
     * @return JP_CruiseSportServices
     */
    public function setPathinhileo($Pathinhileo)
    {
      $this->Pathinhileo = $Pathinhileo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGym()
    {
      return $this->Gym;
    }

    /**
     * @param boolean $Gym
     * @return JP_CruiseSportServices
     */
    public function setGym($Gym)
    {
      $this->Gym = $Gym;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAquaticplant()
    {
      return $this->Aquaticplant;
    }

    /**
     * @param boolean $Aquaticplant
     * @return JP_CruiseSportServices
     */
    public function setAquaticplant($Aquaticplant)
    {
      $this->Aquaticplant = $Aquaticplant;
      return $this;
    }

}

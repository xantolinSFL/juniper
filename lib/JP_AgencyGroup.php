<?php

class JP_AgencyGroup
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Market
     */
    protected $Market = null;

    
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
     * @return JP_AgencyGroup
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarket()
    {
      return $this->Market;
    }

    /**
     * @param string $Market
     * @return JP_AgencyGroup
     */
    public function setMarket($Market)
    {
      $this->Market = $Market;
      return $this;
    }

}

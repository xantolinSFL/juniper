<?php

class JP_HotelChain
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    
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
     * @return JP_HotelChain
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}

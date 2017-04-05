<?php

namespace Juniper\Webservice;

class JP_ShipInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Company
     */
    protected $Company = null;

    
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
     * @return JP_ShipInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param string $Company
     * @return JP_ShipInfo
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

}

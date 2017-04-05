<?php

namespace Juniper\Webservice;

class JP_FinalCustomerAddressStaticData
{

    /**
     * @var string $City
     */
    protected $City = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return JP_FinalCustomerAddressStaticData
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

}

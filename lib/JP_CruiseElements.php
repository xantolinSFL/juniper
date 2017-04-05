<?php

namespace Juniper\Webservice;

class JP_CruiseElements
{

    /**
     * @var JP_CruiseElement $CruiseElement
     */
    protected $CruiseElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseElement
     */
    public function getCruiseElement()
    {
      return $this->CruiseElement;
    }

    /**
     * @param JP_CruiseElement $CruiseElement
     * @return JP_CruiseElements
     */
    public function setCruiseElement($CruiseElement)
    {
      $this->CruiseElement = $CruiseElement;
      return $this;
    }

}

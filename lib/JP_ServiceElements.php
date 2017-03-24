<?php

class JP_ServiceElements
{

    /**
     * @var JP_ServiceElement $ServiceElement
     */
    protected $ServiceElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ServiceElement
     */
    public function getServiceElement()
    {
      return $this->ServiceElement;
    }

    /**
     * @param JP_ServiceElement $ServiceElement
     * @return JP_ServiceElements
     */
    public function setServiceElement($ServiceElement)
    {
      $this->ServiceElement = $ServiceElement;
      return $this;
    }

}

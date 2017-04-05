<?php

namespace Juniper\Webservice;

class JP_VisaElements
{

    /**
     * @var JP_VisaElement $VisaElement
     */
    protected $VisaElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_VisaElement
     */
    public function getVisaElement()
    {
      return $this->VisaElement;
    }

    /**
     * @param JP_VisaElement $VisaElement
     * @return JP_VisaElements
     */
    public function setVisaElement($VisaElement)
    {
      $this->VisaElement = $VisaElement;
      return $this;
    }

}

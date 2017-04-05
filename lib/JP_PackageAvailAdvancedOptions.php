<?php

namespace Juniper\Webservice;

class JP_PackageAvailAdvancedOptions extends JP_AvailAdvancedOptions
{

    /**
     * @var boolean $ShowOnlyAvailable
     */
    protected $ShowOnlyAvailable = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getShowOnlyAvailable()
    {
      return $this->ShowOnlyAvailable;
    }

    /**
     * @param boolean $ShowOnlyAvailable
     * @return JP_PackageAvailAdvancedOptions
     */
    public function setShowOnlyAvailable($ShowOnlyAvailable)
    {
      $this->ShowOnlyAvailable = $ShowOnlyAvailable;
      return $this;
    }

}

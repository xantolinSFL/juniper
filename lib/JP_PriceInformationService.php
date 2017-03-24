<?php

class JP_PriceInformationService
{

    /**
     * @var JP_ServiceInfo $ServiceInfo
     */
    protected $ServiceInfo = null;

    /**
     * @var ArrayOfJP_ServiceOption $ServiceOptions
     */
    protected $ServiceOptions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ServiceInfo
     */
    public function getServiceInfo()
    {
      return $this->ServiceInfo;
    }

    /**
     * @param JP_ServiceInfo $ServiceInfo
     * @return JP_PriceInformationService
     */
    public function setServiceInfo($ServiceInfo)
    {
      $this->ServiceInfo = $ServiceInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceOption
     */
    public function getServiceOptions()
    {
      return $this->ServiceOptions;
    }

    /**
     * @param ArrayOfJP_ServiceOption $ServiceOptions
     * @return JP_PriceInformationService
     */
    public function setServiceOptions($ServiceOptions)
    {
      $this->ServiceOptions = $ServiceOptions;
      return $this;
    }

}

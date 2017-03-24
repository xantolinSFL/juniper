<?php

class JP_PriceInformationVisa
{

    /**
     * @var JP_VisaInfo $VisaInfo
     */
    protected $VisaInfo = null;

    /**
     * @var ArrayOfJP_VisaOption $VisaOptions
     */
    protected $VisaOptions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_VisaInfo
     */
    public function getVisaInfo()
    {
      return $this->VisaInfo;
    }

    /**
     * @param JP_VisaInfo $VisaInfo
     * @return JP_PriceInformationVisa
     */
    public function setVisaInfo($VisaInfo)
    {
      $this->VisaInfo = $VisaInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_VisaOption
     */
    public function getVisaOptions()
    {
      return $this->VisaOptions;
    }

    /**
     * @param ArrayOfJP_VisaOption $VisaOptions
     * @return JP_PriceInformationVisa
     */
    public function setVisaOptions($VisaOptions)
    {
      $this->VisaOptions = $VisaOptions;
      return $this;
    }

}

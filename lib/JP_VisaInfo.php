<?php

namespace Juniper\Webservice;

class JP_VisaInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfString1 $Images
     */
    protected $Images = null;

    
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
     * @return JP_VisaInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_VisaInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfString1
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfString1 $Images
     * @return JP_VisaInfo
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

}

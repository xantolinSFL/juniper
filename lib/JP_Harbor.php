<?php

namespace Juniper\Webservice;

class JP_Harbor
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfString1 $Images
     */
    protected $Images = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $Code
     */
    public function __construct($Code)
    {
      $this->Code = $Code;
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
     * @return JP_Harbor
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return JP_Harbor
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_Harbor
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

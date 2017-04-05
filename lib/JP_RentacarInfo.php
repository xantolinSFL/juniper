<?php

namespace Juniper\Webservice;

class JP_RentacarInfo
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
     * @var string $Image
     */
    protected $Image = null;

    
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
     * @return JP_RentacarInfo
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
     * @return JP_RentacarInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
      return $this->Image;
    }

    /**
     * @param string $Image
     * @return JP_RentacarInfo
     */
    public function setImage($Image)
    {
      $this->Image = $Image;
      return $this;
    }

}

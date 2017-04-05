<?php

namespace Juniper\Webservice;

class JP_CruiseDeck
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

    /**
     * @var int $Level
     */
    protected $Level = null;

    /**
     * @param int $Level
     */
    public function __construct($Level)
    {
      $this->Level = $Level;
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
     * @return JP_CruiseDeck
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
     * @return JP_CruiseDeck
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
     * @return JP_CruiseDeck
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param int $Level
     * @return JP_CruiseDeck
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}

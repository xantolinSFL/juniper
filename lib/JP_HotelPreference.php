<?php

namespace Juniper\Webservice;

class JP_HotelPreference
{

    /**
     * @var string $Description
     */
    protected $Description = null;

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
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_HotelPreference
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return JP_HotelPreference
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

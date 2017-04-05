<?php

namespace Juniper\Webservice;

class JP_Destination
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var JP_RouteType $Route
     */
    protected $Route = null;

    /**
     * @param string $Code
     * @param string $Type
     * @param JP_RouteType $Route
     */
    public function __construct($Code, $Type, $Route)
    {
      $this->Code = $Code;
      $this->Type = $Type;
      $this->Route = $Route;
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
     * @return JP_Destination
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return JP_Destination
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return JP_Destination
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return JP_RouteType
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param JP_RouteType $Route
     * @return JP_Destination
     */
    public function setRoute($Route)
    {
      $this->Route = $Route;
      return $this;
    }

}

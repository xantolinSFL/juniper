<?php

namespace Juniper\Webservice;

class JP_Supplier
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
     * @var string $IntCode
     */
    protected $IntCode = null;

    /**
     * @param string $Code
     * @param string $IntCode
     */
    public function __construct($Code, $IntCode)
    {
      $this->Code = $Code;
      $this->IntCode = $IntCode;
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
     * @return JP_Supplier
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
     * @return JP_Supplier
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntCode()
    {
      return $this->IntCode;
    }

    /**
     * @param string $IntCode
     * @return JP_Supplier
     */
    public function setIntCode($IntCode)
    {
      $this->IntCode = $IntCode;
      return $this;
    }

}

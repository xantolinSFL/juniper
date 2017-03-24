<?php

class JPSOAP_IdName
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @param int $Code
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
     * @return JPSOAP_IdName
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return JPSOAP_IdName
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

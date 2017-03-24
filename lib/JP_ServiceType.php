<?php

class JP_ServiceType
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
     * @var int $ParentCode
     */
    protected $ParentCode = null;

    /**
     * @param int $Code
     * @param int $ParentCode
     */
    public function __construct($Code, $ParentCode)
    {
      $this->Code = $Code;
      $this->ParentCode = $ParentCode;
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
     * @return JP_ServiceType
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
     * @return JP_ServiceType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentCode()
    {
      return $this->ParentCode;
    }

    /**
     * @param int $ParentCode
     * @return JP_ServiceType
     */
    public function setParentCode($ParentCode)
    {
      $this->ParentCode = $ParentCode;
      return $this;
    }

}

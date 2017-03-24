<?php

class JP_ServiceContract extends JP_Contract
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $ProvCode
     */
    protected $ProvCode = null;

    /**
     * @param string $Type
     * @param int $ProvCode
     */
    public function __construct($Type, $ProvCode)
    {
      parent::__construct($Type);
      $this->ProvCode = $ProvCode;
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
     * @return JP_ServiceContract
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getProvCode()
    {
      return $this->ProvCode;
    }

    /**
     * @param int $ProvCode
     * @return JP_ServiceContract
     */
    public function setProvCode($ProvCode)
    {
      $this->ProvCode = $ProvCode;
      return $this;
    }

}

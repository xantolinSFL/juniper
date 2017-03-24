<?php

class JP_ProductSupplier
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
     * @var boolean $External
     */
    protected $External = null;

    /**
     * @param string $Code
     * @param boolean $External
     */
    public function __construct($Code, $External)
    {
      $this->Code = $Code;
      $this->External = $External;
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
     * @return JP_ProductSupplier
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
     * @return JP_ProductSupplier
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExternal()
    {
      return $this->External;
    }

    /**
     * @param boolean $External
     * @return JP_ProductSupplier
     */
    public function setExternal($External)
    {
      $this->External = $External;
      return $this;
    }

}

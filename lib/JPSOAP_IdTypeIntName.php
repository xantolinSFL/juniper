<?php

class JPSOAP_IdTypeIntName extends JPSOAP_IdName
{

    /**
     * @var int $TypeCode
     */
    protected $TypeCode = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param int $Code
     * @param int $TypeCode
     * @param string $Type
     */
    public function __construct($Code, $TypeCode, $Type)
    {
      parent::__construct($Code);
      $this->TypeCode = $TypeCode;
      $this->Type = $Type;
    }

    /**
     * @return int
     */
    public function getTypeCode()
    {
      return $this->TypeCode;
    }

    /**
     * @param int $TypeCode
     * @return JPSOAP_IdTypeIntName
     */
    public function setTypeCode($TypeCode)
    {
      $this->TypeCode = $TypeCode;
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
     * @return JPSOAP_IdTypeIntName
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}

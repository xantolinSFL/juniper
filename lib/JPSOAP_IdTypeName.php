<?php

class JPSOAP_IdTypeName extends JPSOAP_IdName
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param int $Code
     * @param string $Type
     */
    public function __construct($Code, $Type)
    {
      parent::__construct($Code);
      $this->Type = $Type;
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
     * @return JPSOAP_IdTypeName
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}

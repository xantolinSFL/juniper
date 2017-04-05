<?php

namespace Juniper\Webservice;

class JP_ErrorType
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $Type
     * @param string $Text
     * @param string $Code
     */
    public function __construct($Type, $Text, $Code)
    {
      $this->Type = $Type;
      $this->Text = $Text;
      $this->Code = $Code;
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
     * @return JP_ErrorType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return JP_ErrorType
     */
    public function setText($Text)
    {
      $this->Text = $Text;
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
     * @return JP_ErrorType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

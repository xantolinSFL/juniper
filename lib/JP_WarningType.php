<?php

class JP_WarningType
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @param string $Code
     * @param string $Text
     */
    public function __construct($Code, $Text)
    {
      $this->Code = $Code;
      $this->Text = $Text;
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
     * @return JP_WarningType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return JP_WarningType
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}

<?php

class JP_LargeFamilyDiscount
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $AutonomousCommunity
     */
    protected $AutonomousCommunity = null;

    /**
     * @param string $_
     * @param string $Type
     * @param string $Code
     * @param string $AutonomousCommunity
     */
    public function __construct($_, $Type, $Code, $AutonomousCommunity)
    {
      $this->_ = $_;
      $this->Type = $Type;
      $this->Code = $Code;
      $this->AutonomousCommunity = $AutonomousCommunity;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return JP_LargeFamilyDiscount
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return JP_LargeFamilyDiscount
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return JP_LargeFamilyDiscount
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getAutonomousCommunity()
    {
      return $this->AutonomousCommunity;
    }

    /**
     * @param string $AutonomousCommunity
     * @return JP_LargeFamilyDiscount
     */
    public function setAutonomousCommunity($AutonomousCommunity)
    {
      $this->AutonomousCommunity = $AutonomousCommunity;
      return $this;
    }

}

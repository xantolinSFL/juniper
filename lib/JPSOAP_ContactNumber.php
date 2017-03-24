<?php

class JPSOAP_ContactNumber extends JPSOAP_Email
{

    /**
     * @var JPSOAP_Email $_
     */
    protected $_ = null;

    /**
     * @var string $Int
     */
    protected $Int = null;

    /**
     * @var string $Area
     */
    protected $Area = null;

    /**
     * @param string $_
     * @param JPSOAP_HotelInventoryContactNumberType $Type
     * @param JPSOAP_Email $_
     * @param string $Int
     * @param string $Area
     */
    public function __construct($_, $Type, $Int, $Area)
    {
      parent::__construct($_, $Type);
      $this->_ = $_;
      $this->Int = $Int;
      $this->Area = $Area;
    }

    /**
     * @return JPSOAP_Email
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param JPSOAP_Email $_
     * @return JPSOAP_ContactNumber
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getInt()
    {
      return $this->Int;
    }

    /**
     * @param string $Int
     * @return JPSOAP_ContactNumber
     */
    public function setInt($Int)
    {
      $this->Int = $Int;
      return $this;
    }

    /**
     * @return string
     */
    public function getArea()
    {
      return $this->Area;
    }

    /**
     * @param string $Area
     * @return JPSOAP_ContactNumber
     */
    public function setArea($Area)
    {
      $this->Area = $Area;
      return $this;
    }

}

<?php

class JP_ZoneListRequest
{

    /**
     * @var JP_ProductType $ProductType
     */
    protected $ProductType = null;

    /**
     * @var boolean $ShowIATA
     */
    protected $ShowIATA = null;

    /**
     * @var int $MaxLevel
     */
    protected $MaxLevel = null;

    /**
     * @param JP_ProductType $ProductType
     * @param boolean $ShowIATA
     * @param int $MaxLevel
     */
    public function __construct($ProductType, $ShowIATA, $MaxLevel)
    {
      $this->ProductType = $ProductType;
      $this->ShowIATA = $ShowIATA;
      $this->MaxLevel = $MaxLevel;
    }

    /**
     * @return JP_ProductType
     */
    public function getProductType()
    {
      return $this->ProductType;
    }

    /**
     * @param JP_ProductType $ProductType
     * @return JP_ZoneListRequest
     */
    public function setProductType($ProductType)
    {
      $this->ProductType = $ProductType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getShowIATA()
    {
      return $this->ShowIATA;
    }

    /**
     * @param boolean $ShowIATA
     * @return JP_ZoneListRequest
     */
    public function setShowIATA($ShowIATA)
    {
      $this->ShowIATA = $ShowIATA;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxLevel()
    {
      return $this->MaxLevel;
    }

    /**
     * @param int $MaxLevel
     * @return JP_ZoneListRequest
     */
    public function setMaxLevel($MaxLevel)
    {
      $this->MaxLevel = $MaxLevel;
      return $this;
    }

}

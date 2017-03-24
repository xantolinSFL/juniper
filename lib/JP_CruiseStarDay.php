<?php

class JP_CruiseStarDay
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var date $Date
     */
    protected $Date = null;

    /**
     * @param string $_
     * @param date $Date
     */
    public function __construct($_, $Date)
    {
      $this->_ = $_;
      $this->Date = $Date;
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
     * @return JP_CruiseStarDay
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param date $Date
     * @return JP_CruiseStarDay
     */
    public function setDate($Date)
    {
      $this->Date = $Date;
      return $this;
    }

}

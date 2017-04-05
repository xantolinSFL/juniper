<?php

namespace Juniper\Webservice;

class JP_FirstDayCostCancellation
{

    /**
     * @var date $_
     */
    protected $_ = null;

    /**
     * @var string $Hour
     */
    protected $Hour = null;

    /**
     * @param date $_
     * @param string $Hour
     */
    public function __construct($_, $Hour)
    {
      $this->_ = $_;
      $this->Hour = $Hour;
    }

    /**
     * @return date
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param date $_
     * @return JP_FirstDayCostCancellation
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getHour()
    {
      return $this->Hour;
    }

    /**
     * @param string $Hour
     * @return JP_FirstDayCostCancellation
     */
    public function setHour($Hour)
    {
      $this->Hour = $Hour;
      return $this;
    }

}

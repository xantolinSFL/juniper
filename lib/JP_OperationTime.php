<?php

namespace Juniper\Webservice;

class JP_OperationTime
{

    /**
     * @var ArrayOfJP_Hour $Hours
     */
    protected $Hours = null;

    /**
     * @var anonymous219 $Day
     */
    protected $Day = null;

    /**
     * @var date $DateFrom
     */
    protected $DateFrom = null;

    /**
     * @var date $DateTo
     */
    protected $DateTo = null;

    /**
     * @param anonymous219 $Day
     * @param date $DateFrom
     * @param date $DateTo
     */
    public function __construct($Day, $DateFrom, $DateTo)
    {
      $this->Day = $Day;
      $this->DateFrom = $DateFrom;
      $this->DateTo = $DateTo;
    }

    /**
     * @return ArrayOfJP_Hour
     */
    public function getHours()
    {
      return $this->Hours;
    }

    /**
     * @param ArrayOfJP_Hour $Hours
     * @return JP_OperationTime
     */
    public function setHours($Hours)
    {
      $this->Hours = $Hours;
      return $this;
    }

    /**
     * @return anonymous219
     */
    public function getDay()
    {
      return $this->Day;
    }

    /**
     * @param anonymous219 $Day
     * @return JP_OperationTime
     */
    public function setDay($Day)
    {
      $this->Day = $Day;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateFrom()
    {
      return $this->DateFrom;
    }

    /**
     * @param date $DateFrom
     * @return JP_OperationTime
     */
    public function setDateFrom($DateFrom)
    {
      $this->DateFrom = $DateFrom;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateTo()
    {
      return $this->DateTo;
    }

    /**
     * @param date $DateTo
     * @return JP_OperationTime
     */
    public function setDateTo($DateTo)
    {
      $this->DateTo = $DateTo;
      return $this;
    }

}

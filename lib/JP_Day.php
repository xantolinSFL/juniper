<?php

class JP_Day
{

    /**
     * @var JP_Harbor $Harbor
     */
    protected $Harbor = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var time $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var time $ArrivalTime
     */
    protected $ArrivalTime = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @var boolean $OnSea
     */
    protected $OnSea = null;

    /**
     * @param string $Code
     * @param time $DepartureTime
     * @param time $ArrivalTime
     * @param int $Order
     * @param boolean $OnSea
     */
    public function __construct($Code, $DepartureTime, $ArrivalTime, $Order, $OnSea)
    {
      $this->Code = $Code;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalTime = $ArrivalTime;
      $this->Order = $Order;
      $this->OnSea = $OnSea;
    }

    /**
     * @return JP_Harbor
     */
    public function getHarbor()
    {
      return $this->Harbor;
    }

    /**
     * @param JP_Harbor $Harbor
     * @return JP_Day
     */
    public function setHarbor($Harbor)
    {
      $this->Harbor = $Harbor;
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
     * @return JP_Day
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return time
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param time $DepartureTime
     * @return JP_Day
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return time
     */
    public function getArrivalTime()
    {
      return $this->ArrivalTime;
    }

    /**
     * @param time $ArrivalTime
     * @return JP_Day
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param int $Order
     * @return JP_Day
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnSea()
    {
      return $this->OnSea;
    }

    /**
     * @param boolean $OnSea
     * @return JP_Day
     */
    public function setOnSea($OnSea)
    {
      $this->OnSea = $OnSea;
      return $this;
    }

}

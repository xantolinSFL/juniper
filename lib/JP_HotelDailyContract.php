<?php

namespace Juniper\Webservice;

class JP_HotelDailyContract extends JP_HotelContractType
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var int $Days
     */
    protected $Days = null;

    /**
     * @var boolean $ExtranetContract
     */
    protected $ExtranetContract = null;

    /**
     * @param string $Type
     * @param string $Code
     * @param date $Start
     * @param int $Days
     * @param boolean $ExtranetContract
     */
    public function __construct($Type, $Code, $Start, $Days, $ExtranetContract)
    {
      parent::__construct($Type);
      $this->Code = $Code;
      $this->Start = $Start;
      $this->Days = $Days;
      $this->ExtranetContract = $ExtranetContract;
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
     * @return JP_HotelDailyContract
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return date
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param date $Start
     * @return JP_HotelDailyContract
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return int
     */
    public function getDays()
    {
      return $this->Days;
    }

    /**
     * @param int $Days
     * @return JP_HotelDailyContract
     */
    public function setDays($Days)
    {
      $this->Days = $Days;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExtranetContract()
    {
      return $this->ExtranetContract;
    }

    /**
     * @param boolean $ExtranetContract
     * @return JP_HotelDailyContract
     */
    public function setExtranetContract($ExtranetContract)
    {
      $this->ExtranetContract = $ExtranetContract;
      return $this;
    }

}

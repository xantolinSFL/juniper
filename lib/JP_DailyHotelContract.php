<?php

namespace Juniper\Webservice;

class JP_DailyHotelContract extends JP_Contract
{

    /**
     * @var date $StayDate
     */
    protected $StayDate = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $Type
     * @param date $StayDate
     * @param string $Code
     */
    public function __construct($Type, $StayDate, $Code)
    {
      parent::__construct($Type);
      $this->StayDate = $StayDate;
      $this->Code = $Code;
    }

    /**
     * @return date
     */
    public function getStayDate()
    {
      return $this->StayDate;
    }

    /**
     * @param date $StayDate
     * @return JP_DailyHotelContract
     */
    public function setStayDate($StayDate)
    {
      $this->StayDate = $StayDate;
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
     * @return JP_DailyHotelContract
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

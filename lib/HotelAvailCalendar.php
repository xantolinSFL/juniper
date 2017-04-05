<?php

namespace Juniper\Webservice;

class HotelAvailCalendar
{

    /**
     * @var JP_HotelAvailCalendar $HotelAvailCalendarRQ
     */
    protected $HotelAvailCalendarRQ = null;

    /**
     * @param JP_HotelAvailCalendar $HotelAvailCalendarRQ
     */
    public function __construct($HotelAvailCalendarRQ)
    {
      $this->HotelAvailCalendarRQ = $HotelAvailCalendarRQ;
    }

    /**
     * @return JP_HotelAvailCalendar
     */
    public function getHotelAvailCalendarRQ()
    {
      return $this->HotelAvailCalendarRQ;
    }

    /**
     * @param JP_HotelAvailCalendar $HotelAvailCalendarRQ
     * @return HotelAvailCalendar
     */
    public function setHotelAvailCalendarRQ($HotelAvailCalendarRQ)
    {
      $this->HotelAvailCalendarRQ = $HotelAvailCalendarRQ;
      return $this;
    }

}

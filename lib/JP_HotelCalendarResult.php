<?php

class JP_HotelCalendarResult
{

    /**
     * @var ArrayOfJP_HotelResult $HotelResults
     */
    protected $HotelResults = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @param date $Start
     * @param date $End
     */
    public function __construct($Start, $End)
    {
      $this->Start = $Start;
      $this->End = $End;
    }

    /**
     * @return ArrayOfJP_HotelResult
     */
    public function getHotelResults()
    {
      return $this->HotelResults;
    }

    /**
     * @param ArrayOfJP_HotelResult $HotelResults
     * @return JP_HotelCalendarResult
     */
    public function setHotelResults($HotelResults)
    {
      $this->HotelResults = $HotelResults;
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
     * @return JP_HotelCalendarResult
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return JP_HotelCalendarResult
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

}

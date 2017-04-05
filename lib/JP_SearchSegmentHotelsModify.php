<?php

namespace Juniper\Webservice;

class JP_SearchSegmentHotelsModify
{

    /**
     * @var string $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var JP_Board $Board
     */
    protected $Board = null;

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
     * @return string
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param string $HotelCode
     * @return JP_SearchSegmentHotelsModify
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return JP_Board
     */
    public function getBoard()
    {
      return $this->Board;
    }

    /**
     * @param JP_Board $Board
     * @return JP_SearchSegmentHotelsModify
     */
    public function setBoard($Board)
    {
      $this->Board = $Board;
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
     * @return JP_SearchSegmentHotelsModify
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
     * @return JP_SearchSegmentHotelsModify
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

}

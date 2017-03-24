<?php

class JP_Seat
{

    /**
     * @var string $Avail
     */
    protected $Avail = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var int $Group
     */
    protected $Group = null;

    /**
     * @var boolean $Premium
     */
    protected $Premium = null;

    /**
     * @var string $Situations
     */
    protected $Situations = null;

    /**
     * @var string $SeatSelectionCode
     */
    protected $SeatSelectionCode = null;

    /**
     * @param string $Avail
     * @param string $Code
     * @param int $Group
     * @param boolean $Premium
     * @param string $Situations
     * @param string $SeatSelectionCode
     */
    public function __construct($Avail, $Code, $Group, $Premium, $Situations, $SeatSelectionCode)
    {
      $this->Avail = $Avail;
      $this->Code = $Code;
      $this->Group = $Group;
      $this->Premium = $Premium;
      $this->Situations = $Situations;
      $this->SeatSelectionCode = $SeatSelectionCode;
    }

    /**
     * @return string
     */
    public function getAvail()
    {
      return $this->Avail;
    }

    /**
     * @param string $Avail
     * @return JP_Seat
     */
    public function setAvail($Avail)
    {
      $this->Avail = $Avail;
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
     * @return JP_Seat
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroup()
    {
      return $this->Group;
    }

    /**
     * @param int $Group
     * @return JP_Seat
     */
    public function setGroup($Group)
    {
      $this->Group = $Group;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPremium()
    {
      return $this->Premium;
    }

    /**
     * @param boolean $Premium
     * @return JP_Seat
     */
    public function setPremium($Premium)
    {
      $this->Premium = $Premium;
      return $this;
    }

    /**
     * @return string
     */
    public function getSituations()
    {
      return $this->Situations;
    }

    /**
     * @param string $Situations
     * @return JP_Seat
     */
    public function setSituations($Situations)
    {
      $this->Situations = $Situations;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeatSelectionCode()
    {
      return $this->SeatSelectionCode;
    }

    /**
     * @param string $SeatSelectionCode
     * @return JP_Seat
     */
    public function setSeatSelectionCode($SeatSelectionCode)
    {
      $this->SeatSelectionCode = $SeatSelectionCode;
      return $this;
    }

}

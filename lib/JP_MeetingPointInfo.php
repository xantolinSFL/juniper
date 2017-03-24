<?php

class JP_MeetingPointInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var \DateTime $MeetingTime
     */
    protected $MeetingTime = null;

    /**
     * @param string $Code
     * @param \DateTime $MeetingTime
     */
    public function __construct($Code, \DateTime $MeetingTime)
    {
      $this->Code = $Code;
      $this->MeetingTime = $MeetingTime->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_MeetingPointInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return JP_MeetingPointInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return JP_MeetingPointInfo
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
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
     * @return JP_MeetingPointInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMeetingTime()
    {
      if ($this->MeetingTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MeetingTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $MeetingTime
     * @return JP_MeetingPointInfo
     */
    public function setMeetingTime(\DateTime $MeetingTime)
    {
      $this->MeetingTime = $MeetingTime->format(\DateTime::ATOM);
      return $this;
    }

}

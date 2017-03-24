<?php

class JP_VisaOption
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfString1 $Images
     */
    protected $Images = null;

    /**
     * @var string $DestinationName
     */
    protected $DestinationName = null;

    /**
     * @var ArrayOfJP_ServiceDate $Dates
     */
    protected $Dates = null;

    /**
     * @var \DateTime $Start
     */
    protected $Start = null;

    /**
     * @var \DateTime $End
     */
    protected $End = null;

    /**
     * @var int $Destination
     */
    protected $Destination = null;

    /**
     * @var duration $Duration
     */
    protected $Duration = null;

    /**
     * @param \DateTime $Start
     * @param \DateTime $End
     * @param int $Destination
     * @param duration $Duration
     */
    public function __construct(\DateTime $Start, \DateTime $End, $Destination, $Duration)
    {
      $this->Start = $Start->format(\DateTime::ATOM);
      $this->End = $End->format(\DateTime::ATOM);
      $this->Destination = $Destination;
      $this->Duration = $Duration;
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
     * @return JP_VisaOption
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_VisaOption
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfString1
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfString1 $Images
     * @return JP_VisaOption
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationName()
    {
      return $this->DestinationName;
    }

    /**
     * @param string $DestinationName
     * @return JP_VisaOption
     */
    public function setDestinationName($DestinationName)
    {
      $this->DestinationName = $DestinationName;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceDate
     */
    public function getDates()
    {
      return $this->Dates;
    }

    /**
     * @param ArrayOfJP_ServiceDate $Dates
     * @return JP_VisaOption
     */
    public function setDates($Dates)
    {
      $this->Dates = $Dates;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
      if ($this->Start == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Start);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Start
     * @return JP_VisaOption
     */
    public function setStart(\DateTime $Start)
    {
      $this->Start = $Start->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
      if ($this->End == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->End);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $End
     * @return JP_VisaOption
     */
    public function setEnd(\DateTime $End)
    {
      $this->End = $End->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param int $Destination
     * @return JP_VisaOption
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param duration $Duration
     * @return JP_VisaOption
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

}

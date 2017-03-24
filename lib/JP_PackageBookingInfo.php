<?php

class JP_PackageBookingInfo
{

    /**
     * @var JP_BookingPrice $Price
     */
    protected $Price = null;

    /**
     * @var JP_AvailStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $PackageCode
     */
    protected $PackageCode = null;

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
     * @return JP_BookingPrice
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param JP_BookingPrice $Price
     * @return JP_PackageBookingInfo
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return JP_AvailStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param JP_AvailStatus $Status
     * @return JP_PackageBookingInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageCode()
    {
      return $this->PackageCode;
    }

    /**
     * @param string $PackageCode
     * @return JP_PackageBookingInfo
     */
    public function setPackageCode($PackageCode)
    {
      $this->PackageCode = $PackageCode;
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
     * @return JP_PackageBookingInfo
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
     * @return JP_PackageBookingInfo
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

}

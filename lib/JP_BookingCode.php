<?php

namespace Juniper\Webservice;

class JP_BookingCode
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @param string $_
     * @param \DateTime $ExpirationDate
     */
    public function __construct($_, \DateTime $ExpirationDate)
    {
      $this->_ = $_;
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return JP_BookingCode
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->ExpirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationDate
     * @return JP_BookingCode
     */
    public function setExpirationDate(\DateTime $ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      return $this;
    }

}

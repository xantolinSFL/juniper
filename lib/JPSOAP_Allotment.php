<?php

namespace Juniper\Webservice;

class JPSOAP_Allotment
{

    /**
     * @var date $From
     */
    protected $From = null;

    /**
     * @var date $To
     */
    protected $To = null;

    /**
     * @var int $Available
     */
    protected $Available = null;

    /**
     * @param date $From
     * @param date $To
     * @param int $Available
     */
    public function __construct($From, $To, $Available)
    {
      $this->From = $From;
      $this->To = $To;
      $this->Available = $Available;
    }

    /**
     * @return date
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param date $From
     * @return JPSOAP_Allotment
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return date
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param date $To
     * @return JPSOAP_Allotment
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

    /**
     * @return int
     */
    public function getAvailable()
    {
      return $this->Available;
    }

    /**
     * @param int $Available
     * @return JPSOAP_Allotment
     */
    public function setAvailable($Available)
    {
      $this->Available = $Available;
      return $this;
    }

}

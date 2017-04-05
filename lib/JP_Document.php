<?php

namespace Juniper\Webservice;

class JP_Document
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var JP_DocumentType $Type
     */
    protected $Type = null;

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @param string $_
     * @param JP_DocumentType $Type
     * @param \DateTime $ExpirationDate
     */
    public function __construct($_, $Type, \DateTime $ExpirationDate)
    {
      $this->_ = $_;
      $this->Type = $Type;
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
     * @return JP_Document
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return JP_DocumentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JP_DocumentType $Type
     * @return JP_Document
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return JP_Document
     */
    public function setExpirationDate(\DateTime $ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate->format(\DateTime::ATOM);
      return $this;
    }

}

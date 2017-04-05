<?php

namespace Juniper\Webservice;

class JP_RentacarLocationContentRQ
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

    /**
     * @var ArrayOfJP_RentacarLocationSimpleContent $RentacarLocationContentList
     */
    protected $RentacarLocationContentList = null;

    /**
     * @var JP_RestrictedOptions $RestrictedOptions
     */
    protected $RestrictedOptions = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @var string $Language
     */
    protected $Language = null;

    /**
     * @param string $Version
     * @param string $Language
     */
    public function __construct($Version, $Language)
    {
      $this->Version = $Version;
      $this->Language = $Language;
    }

    /**
     * @return JP_Login
     */
    public function getLogin()
    {
      return $this->Login;
    }

    /**
     * @param JP_Login $Login
     * @return JP_RentacarLocationContentRQ
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return ArrayOfJP_RentacarLocationSimpleContent
     */
    public function getRentacarLocationContentList()
    {
      return $this->RentacarLocationContentList;
    }

    /**
     * @param ArrayOfJP_RentacarLocationSimpleContent $RentacarLocationContentList
     * @return JP_RentacarLocationContentRQ
     */
    public function setRentacarLocationContentList($RentacarLocationContentList)
    {
      $this->RentacarLocationContentList = $RentacarLocationContentList;
      return $this;
    }

    /**
     * @return JP_RestrictedOptions
     */
    public function getRestrictedOptions()
    {
      return $this->RestrictedOptions;
    }

    /**
     * @param JP_RestrictedOptions $RestrictedOptions
     * @return JP_RentacarLocationContentRQ
     */
    public function setRestrictedOptions($RestrictedOptions)
    {
      $this->RestrictedOptions = $RestrictedOptions;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return JP_RentacarLocationContentRQ
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param string $Language
     * @return JP_RentacarLocationContentRQ
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

}

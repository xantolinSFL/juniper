<?php

namespace Juniper\Webservice;

class JP_HotelPortfolioRQ
{

    /**
     * @var JP_Login $Login
     */
    protected $Login = null;

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
     * @var int $Page
     */
    protected $Page = null;

    /**
     * @var int $RecordsPerPage
     */
    protected $RecordsPerPage = null;

    /**
     * @param string $Version
     * @param string $Language
     * @param int $Page
     * @param int $RecordsPerPage
     */
    public function __construct($Version, $Language, $Page, $RecordsPerPage)
    {
      $this->Version = $Version;
      $this->Language = $Language;
      $this->Page = $Page;
      $this->RecordsPerPage = $RecordsPerPage;
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
     * @return JP_HotelPortfolioRQ
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
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
     * @return JP_HotelPortfolioRQ
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
     * @return JP_HotelPortfolioRQ
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
     * @return JP_HotelPortfolioRQ
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
      return $this->Page;
    }

    /**
     * @param int $Page
     * @return JP_HotelPortfolioRQ
     */
    public function setPage($Page)
    {
      $this->Page = $Page;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecordsPerPage()
    {
      return $this->RecordsPerPage;
    }

    /**
     * @param int $RecordsPerPage
     * @return JP_HotelPortfolioRQ
     */
    public function setRecordsPerPage($RecordsPerPage)
    {
      $this->RecordsPerPage = $RecordsPerPage;
      return $this;
    }

}

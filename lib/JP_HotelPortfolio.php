<?php

class JP_HotelPortfolio
{

    /**
     * @var JP_ExtendedHotelInfo[] $Hotel
     */
    protected $Hotel = null;

    /**
     * @var int $Page
     */
    protected $Page = null;

    /**
     * @var int $RecordsPerPage
     */
    protected $RecordsPerPage = null;

    /**
     * @var int $TotalPages
     */
    protected $TotalPages = null;

    /**
     * @var int $TotalRecords
     */
    protected $TotalRecords = null;

    /**
     * @param int $Page
     * @param int $RecordsPerPage
     * @param int $TotalPages
     * @param int $TotalRecords
     */
    public function __construct($Page, $RecordsPerPage, $TotalPages, $TotalRecords)
    {
      $this->Page = $Page;
      $this->RecordsPerPage = $RecordsPerPage;
      $this->TotalPages = $TotalPages;
      $this->TotalRecords = $TotalRecords;
    }

    /**
     * @return JP_ExtendedHotelInfo[]
     */
    public function getHotel()
    {
      return $this->Hotel;
    }

    /**
     * @param JP_ExtendedHotelInfo[] $Hotel
     * @return JP_HotelPortfolio
     */
    public function setHotel(array $Hotel = null)
    {
      $this->Hotel = $Hotel;
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
     * @return JP_HotelPortfolio
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
     * @return JP_HotelPortfolio
     */
    public function setRecordsPerPage($RecordsPerPage)
    {
      $this->RecordsPerPage = $RecordsPerPage;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
      return $this->TotalPages;
    }

    /**
     * @param int $TotalPages
     * @return JP_HotelPortfolio
     */
    public function setTotalPages($TotalPages)
    {
      $this->TotalPages = $TotalPages;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalRecords()
    {
      return $this->TotalRecords;
    }

    /**
     * @param int $TotalRecords
     * @return JP_HotelPortfolio
     */
    public function setTotalRecords($TotalRecords)
    {
      $this->TotalRecords = $TotalRecords;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class HotelPortfolio
{

    /**
     * @var JP_HotelPortfolioRQ $HotelPortfolioRQ
     */
    protected $HotelPortfolioRQ = null;

    /**
     * @param JP_HotelPortfolioRQ $HotelPortfolioRQ
     */
    public function __construct($HotelPortfolioRQ)
    {
      $this->HotelPortfolioRQ = $HotelPortfolioRQ;
    }

    /**
     * @return JP_HotelPortfolioRQ
     */
    public function getHotelPortfolioRQ()
    {
      return $this->HotelPortfolioRQ;
    }

    /**
     * @param JP_HotelPortfolioRQ $HotelPortfolioRQ
     * @return HotelPortfolio
     */
    public function setHotelPortfolioRQ($HotelPortfolioRQ)
    {
      $this->HotelPortfolioRQ = $HotelPortfolioRQ;
      return $this;
    }

}

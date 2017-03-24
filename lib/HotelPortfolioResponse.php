<?php

class HotelPortfolioResponse
{

    /**
     * @var JP_StaticDataRS $HotelPortfolioRS
     */
    protected $HotelPortfolioRS = null;

    /**
     * @param JP_StaticDataRS $HotelPortfolioRS
     */
    public function __construct($HotelPortfolioRS)
    {
      $this->HotelPortfolioRS = $HotelPortfolioRS;
    }

    /**
     * @return JP_StaticDataRS
     */
    public function getHotelPortfolioRS()
    {
      return $this->HotelPortfolioRS;
    }

    /**
     * @param JP_StaticDataRS $HotelPortfolioRS
     * @return HotelPortfolioResponse
     */
    public function setHotelPortfolioRS($HotelPortfolioRS)
    {
      $this->HotelPortfolioRS = $HotelPortfolioRS;
      return $this;
    }

}

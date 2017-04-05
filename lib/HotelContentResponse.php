<?php

namespace Juniper\Webservice;

class HotelContentResponse
{

    /**
     * @var JP_ContentRS $ContentRS
     */
    protected $ContentRS = null;

    /**
     * @param JP_ContentRS $ContentRS
     */
    public function __construct($ContentRS)
    {
      $this->ContentRS = $ContentRS;
    }

    /**
     * @return JP_ContentRS
     */
    public function getContentRS()
    {
      return $this->ContentRS;
    }

    /**
     * @param JP_ContentRS $ContentRS
     * @return HotelContentResponse
     */
    public function setContentRS($ContentRS)
    {
      $this->ContentRS = $ContentRS;
      return $this;
    }

}

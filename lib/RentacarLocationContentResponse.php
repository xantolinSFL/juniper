<?php

namespace Juniper\Webservice;

class RentacarLocationContentResponse
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
     * @return RentacarLocationContentResponse
     */
    public function setContentRS($ContentRS)
    {
      $this->ContentRS = $ContentRS;
      return $this;
    }

}

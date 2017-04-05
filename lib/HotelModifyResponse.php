<?php

namespace Juniper\Webservice;

class HotelModifyResponse
{

    /**
     * @var JP_ModifyRS $ModifyRS
     */
    protected $ModifyRS = null;

    /**
     * @param JP_ModifyRS $ModifyRS
     */
    public function __construct($ModifyRS)
    {
      $this->ModifyRS = $ModifyRS;
    }

    /**
     * @return JP_ModifyRS
     */
    public function getModifyRS()
    {
      return $this->ModifyRS;
    }

    /**
     * @param JP_ModifyRS $ModifyRS
     * @return HotelModifyResponse
     */
    public function setModifyRS($ModifyRS)
    {
      $this->ModifyRS = $ModifyRS;
      return $this;
    }

}

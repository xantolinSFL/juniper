<?php

namespace Juniper\Webservice;

class JP_ReservationLocationModify
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $ItemId
     */
    protected $ItemId = null;

    /**
     * @param string $_
     * @param string $ItemId
     */
    public function __construct($_, $ItemId)
    {
      $this->_ = $_;
      $this->ItemId = $ItemId;
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
     * @return JP_ReservationLocationModify
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
      return $this->ItemId;
    }

    /**
     * @param string $ItemId
     * @return JP_ReservationLocationModify
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JP_GroupFee
{

    /**
     * @var ArrayOfJP_RelPaxDist $Paxes
     */
    protected $Paxes = null;

    /**
     * @var JP_Price $Price
     */
    protected $Price = null;

    /**
     * @var int $SeatGroup
     */
    protected $SeatGroup = null;

    /**
     * @param int $SeatGroup
     */
    public function __construct($SeatGroup)
    {
      $this->SeatGroup = $SeatGroup;
    }

    /**
     * @return ArrayOfJP_RelPaxDist
     */
    public function getPaxes()
    {
      return $this->Paxes;
    }

    /**
     * @param ArrayOfJP_RelPaxDist $Paxes
     * @return JP_GroupFee
     */
    public function setPaxes($Paxes)
    {
      $this->Paxes = $Paxes;
      return $this;
    }

    /**
     * @return JP_Price
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param JP_Price $Price
     * @return JP_GroupFee
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return int
     */
    public function getSeatGroup()
    {
      return $this->SeatGroup;
    }

    /**
     * @param int $SeatGroup
     * @return JP_GroupFee
     */
    public function setSeatGroup($SeatGroup)
    {
      $this->SeatGroup = $SeatGroup;
      return $this;
    }

}

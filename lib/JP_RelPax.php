<?php

namespace Juniper\Webservice;

class JP_RelPax
{

    /**
     * @var ArrayOfJP_PaxSeat $PaxSeats
     */
    protected $PaxSeats = null;

    /**
     * @var int $IdPax
     */
    protected $IdPax = null;

    /**
     * @param int $IdPax
     */
    public function __construct($IdPax)
    {
      $this->IdPax = $IdPax;
    }

    /**
     * @return ArrayOfJP_PaxSeat
     */
    public function getPaxSeats()
    {
      return $this->PaxSeats;
    }

    /**
     * @param ArrayOfJP_PaxSeat $PaxSeats
     * @return JP_RelPax
     */
    public function setPaxSeats($PaxSeats)
    {
      $this->PaxSeats = $PaxSeats;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdPax()
    {
      return $this->IdPax;
    }

    /**
     * @param int $IdPax
     * @return JP_RelPax
     */
    public function setIdPax($IdPax)
    {
      $this->IdPax = $IdPax;
      return $this;
    }

}

<?php

class TransferAvailByHotel
{

    /**
     * @var JP_TransferAvailabilityRQByHotel $TransferAvailRQByHotel
     */
    protected $TransferAvailRQByHotel = null;

    /**
     * @param JP_TransferAvailabilityRQByHotel $TransferAvailRQByHotel
     */
    public function __construct($TransferAvailRQByHotel)
    {
      $this->TransferAvailRQByHotel = $TransferAvailRQByHotel;
    }

    /**
     * @return JP_TransferAvailabilityRQByHotel
     */
    public function getTransferAvailRQByHotel()
    {
      return $this->TransferAvailRQByHotel;
    }

    /**
     * @param JP_TransferAvailabilityRQByHotel $TransferAvailRQByHotel
     * @return TransferAvailByHotel
     */
    public function setTransferAvailRQByHotel($TransferAvailRQByHotel)
    {
      $this->TransferAvailRQByHotel = $TransferAvailRQByHotel;
      return $this;
    }

}

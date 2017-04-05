<?php

namespace Juniper\Webservice;

class JP_TransferElement extends JP_BaseElement
{

    /**
     * @var ArrayOfJP_TransferBookingInfo $TransfersBookingInfo
     */
    protected $TransfersBookingInfo = null;

    /**
     * @param string $ElementId
     */
    public function __construct($ElementId)
    {
      parent::__construct($ElementId);
    }

    /**
     * @return ArrayOfJP_TransferBookingInfo
     */
    public function getTransfersBookingInfo()
    {
      return $this->TransfersBookingInfo;
    }

    /**
     * @param ArrayOfJP_TransferBookingInfo $TransfersBookingInfo
     * @return JP_TransferElement
     */
    public function setTransfersBookingInfo($TransfersBookingInfo)
    {
      $this->TransfersBookingInfo = $TransfersBookingInfo;
      return $this;
    }

}

<?php

class JP_PackageElement extends JP_BaseElement
{

    /**
     * @var JP_PackageBookingInfo $PackageBookingInfo
     */
    protected $PackageBookingInfo = null;

    /**
     * @var ArrayOfJP_TransferBookingInfo $TransfersBookingInfo
     */
    protected $TransfersBookingInfo = null;

    /**
     * @var ArrayOfJP_ServiceBookingInfo $ServicesBookingInfo
     */
    protected $ServicesBookingInfo = null;

    /**
     * @param string $ElementId
     */
    public function __construct($ElementId)
    {
      parent::__construct($ElementId);
    }

    /**
     * @return JP_PackageBookingInfo
     */
    public function getPackageBookingInfo()
    {
      return $this->PackageBookingInfo;
    }

    /**
     * @param JP_PackageBookingInfo $PackageBookingInfo
     * @return JP_PackageElement
     */
    public function setPackageBookingInfo($PackageBookingInfo)
    {
      $this->PackageBookingInfo = $PackageBookingInfo;
      return $this;
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
     * @return JP_PackageElement
     */
    public function setTransfersBookingInfo($TransfersBookingInfo)
    {
      $this->TransfersBookingInfo = $TransfersBookingInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceBookingInfo
     */
    public function getServicesBookingInfo()
    {
      return $this->ServicesBookingInfo;
    }

    /**
     * @param ArrayOfJP_ServiceBookingInfo $ServicesBookingInfo
     * @return JP_PackageElement
     */
    public function setServicesBookingInfo($ServicesBookingInfo)
    {
      $this->ServicesBookingInfo = $ServicesBookingInfo;
      return $this;
    }

}

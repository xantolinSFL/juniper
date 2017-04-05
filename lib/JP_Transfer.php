<?php

namespace Juniper\Webservice;

class JP_Transfer
{

    /**
     * @var JP_TransferInfo $TransferInfo
     */
    protected $TransferInfo = null;

    /**
     * @var ArrayOfJP_TransferOption $TransferOptions
     */
    protected $TransferOptions = null;

    /**
     * @var JP_TransferBookingInfo $TransferBookingInfo
     */
    protected $TransferBookingInfo = null;

    /**
     * @var ArrayOfJP_Origin $Origins
     */
    protected $Origins = null;

    /**
     * @var ArrayOfJP_Destination $Destinations
     */
    protected $Destinations = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $ICode
     */
    protected $ICode = null;

    /**
     * @var boolean $SearchMore
     */
    protected $SearchMore = null;

    /**
     * @var int $Order
     */
    protected $Order = null;

    /**
     * @param string $Code
     * @param string $ICode
     * @param boolean $SearchMore
     * @param int $Order
     */
    public function __construct($Code, $ICode, $SearchMore, $Order)
    {
      $this->Code = $Code;
      $this->ICode = $ICode;
      $this->SearchMore = $SearchMore;
      $this->Order = $Order;
    }

    /**
     * @return JP_TransferInfo
     */
    public function getTransferInfo()
    {
      return $this->TransferInfo;
    }

    /**
     * @param JP_TransferInfo $TransferInfo
     * @return JP_Transfer
     */
    public function setTransferInfo($TransferInfo)
    {
      $this->TransferInfo = $TransferInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_TransferOption
     */
    public function getTransferOptions()
    {
      return $this->TransferOptions;
    }

    /**
     * @param ArrayOfJP_TransferOption $TransferOptions
     * @return JP_Transfer
     */
    public function setTransferOptions($TransferOptions)
    {
      $this->TransferOptions = $TransferOptions;
      return $this;
    }

    /**
     * @return JP_TransferBookingInfo
     */
    public function getTransferBookingInfo()
    {
      return $this->TransferBookingInfo;
    }

    /**
     * @param JP_TransferBookingInfo $TransferBookingInfo
     * @return JP_Transfer
     */
    public function setTransferBookingInfo($TransferBookingInfo)
    {
      $this->TransferBookingInfo = $TransferBookingInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_Origin
     */
    public function getOrigins()
    {
      return $this->Origins;
    }

    /**
     * @param ArrayOfJP_Origin $Origins
     * @return JP_Transfer
     */
    public function setOrigins($Origins)
    {
      $this->Origins = $Origins;
      return $this;
    }

    /**
     * @return ArrayOfJP_Destination
     */
    public function getDestinations()
    {
      return $this->Destinations;
    }

    /**
     * @param ArrayOfJP_Destination $Destinations
     * @return JP_Transfer
     */
    public function setDestinations($Destinations)
    {
      $this->Destinations = $Destinations;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_Transfer
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getICode()
    {
      return $this->ICode;
    }

    /**
     * @param string $ICode
     * @return JP_Transfer
     */
    public function setICode($ICode)
    {
      $this->ICode = $ICode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchMore()
    {
      return $this->SearchMore;
    }

    /**
     * @param boolean $SearchMore
     * @return JP_Transfer
     */
    public function setSearchMore($SearchMore)
    {
      $this->SearchMore = $SearchMore;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param int $Order
     * @return JP_Transfer
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}

<?php

class JP_ServiceProduct
{

    /**
     * @var JP_ServiceInfo $ServiceInfo
     */
    protected $ServiceInfo = null;

    /**
     * @var ArrayOfJP_ServiceOption $ServiceOptions
     */
    protected $ServiceOptions = null;

    /**
     * @var JP_ServiceBookingInfo $ServiceBookingInfo
     */
    protected $ServiceBookingInfo = null;

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
     * @return JP_ServiceInfo
     */
    public function getServiceInfo()
    {
      return $this->ServiceInfo;
    }

    /**
     * @param JP_ServiceInfo $ServiceInfo
     * @return JP_ServiceProduct
     */
    public function setServiceInfo($ServiceInfo)
    {
      $this->ServiceInfo = $ServiceInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceOption
     */
    public function getServiceOptions()
    {
      return $this->ServiceOptions;
    }

    /**
     * @param ArrayOfJP_ServiceOption $ServiceOptions
     * @return JP_ServiceProduct
     */
    public function setServiceOptions($ServiceOptions)
    {
      $this->ServiceOptions = $ServiceOptions;
      return $this;
    }

    /**
     * @return JP_ServiceBookingInfo
     */
    public function getServiceBookingInfo()
    {
      return $this->ServiceBookingInfo;
    }

    /**
     * @param JP_ServiceBookingInfo $ServiceBookingInfo
     * @return JP_ServiceProduct
     */
    public function setServiceBookingInfo($ServiceBookingInfo)
    {
      $this->ServiceBookingInfo = $ServiceBookingInfo;
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
     * @return JP_ServiceProduct
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
     * @return JP_ServiceProduct
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
     * @return JP_ServiceProduct
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
     * @return JP_ServiceProduct
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}

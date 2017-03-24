<?php

class JP_PackageInsurance
{

    /**
     * @var JP_InsuranceInfo $InsuranceInfo
     */
    protected $InsuranceInfo = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

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
     * @param date $Start
     * @param date $End
     * @param string $ICode
     * @param boolean $SearchMore
     * @param int $Order
     */
    public function __construct($Code, $Start, $End, $ICode, $SearchMore, $Order)
    {
      $this->Code = $Code;
      $this->Start = $Start;
      $this->End = $End;
      $this->ICode = $ICode;
      $this->SearchMore = $SearchMore;
      $this->Order = $Order;
    }

    /**
     * @return JP_InsuranceInfo
     */
    public function getInsuranceInfo()
    {
      return $this->InsuranceInfo;
    }

    /**
     * @param JP_InsuranceInfo $InsuranceInfo
     * @return JP_PackageInsurance
     */
    public function setInsuranceInfo($InsuranceInfo)
    {
      $this->InsuranceInfo = $InsuranceInfo;
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
     * @return JP_PackageInsurance
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return date
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param date $Start
     * @return JP_PackageInsurance
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return JP_PackageInsurance
     */
    public function setEnd($End)
    {
      $this->End = $End;
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
     * @return JP_PackageInsurance
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
     * @return JP_PackageInsurance
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
     * @return JP_PackageInsurance
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}

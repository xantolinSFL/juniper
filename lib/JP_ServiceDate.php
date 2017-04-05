<?php

namespace Juniper\Webservice;

class JP_ServiceDate
{

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var ArrayOfJP_ServiceContract $Contracts
     */
    protected $Contracts = null;

    /**
     * @var string $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var \DateTime $Start
     */
    protected $Start = null;

    /**
     * @var \DateTime $End
     */
    protected $End = null;

    /**
     * @var int $Duration
     */
    protected $Duration = null;

    /**
     * @var string $RatePlanCode
     */
    protected $RatePlanCode = null;

    /**
     * @param \DateTime $Start
     * @param \DateTime $End
     * @param int $Duration
     * @param string $RatePlanCode
     */
    public function __construct(\DateTime $Start, \DateTime $End, $Duration, $RatePlanCode)
    {
      $this->Start = $Start->format(\DateTime::ATOM);
      $this->End = $End->format(\DateTime::ATOM);
      $this->Duration = $Duration;
      $this->RatePlanCode = $RatePlanCode;
    }

    /**
     * @return ArrayOfJP_Price
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfJP_Price $Prices
     * @return JP_ServiceDate
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceContract
     */
    public function getContracts()
    {
      return $this->Contracts;
    }

    /**
     * @param ArrayOfJP_ServiceContract $Contracts
     * @return JP_ServiceDate
     */
    public function setContracts($Contracts)
    {
      $this->Contracts = $Contracts;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierName()
    {
      return $this->SupplierName;
    }

    /**
     * @param string $SupplierName
     * @return JP_ServiceDate
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStart()
    {
      if ($this->Start == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Start);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Start
     * @return JP_ServiceDate
     */
    public function setStart(\DateTime $Start)
    {
      $this->Start = $Start->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnd()
    {
      if ($this->End == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->End);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $End
     * @return JP_ServiceDate
     */
    public function setEnd(\DateTime $End)
    {
      $this->End = $End->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param int $Duration
     * @return JP_ServiceDate
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePlanCode()
    {
      return $this->RatePlanCode;
    }

    /**
     * @param string $RatePlanCode
     * @return JP_ServiceDate
     */
    public function setRatePlanCode($RatePlanCode)
    {
      $this->RatePlanCode = $RatePlanCode;
      return $this;
    }

}

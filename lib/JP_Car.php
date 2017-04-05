<?php

namespace Juniper\Webservice;

class JP_Car
{

    /**
     * @var JP_RentacarInfo $RentacarInfo
     */
    protected $RentacarInfo = null;

    /**
     * @var string $PickupOffice
     */
    protected $PickupOffice = null;

    /**
     * @var string $DropOffOffice
     */
    protected $DropOffOffice = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var \DateTime $Start
     */
    protected $Start = null;

    /**
     * @var \DateTime $End
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
     * @param \DateTime $Start
     * @param \DateTime $End
     * @param string $ICode
     * @param boolean $SearchMore
     * @param int $Order
     */
    public function __construct($Code, \DateTime $Start, \DateTime $End, $ICode, $SearchMore, $Order)
    {
      $this->Code = $Code;
      $this->Start = $Start->format(\DateTime::ATOM);
      $this->End = $End->format(\DateTime::ATOM);
      $this->ICode = $ICode;
      $this->SearchMore = $SearchMore;
      $this->Order = $Order;
    }

    /**
     * @return JP_RentacarInfo
     */
    public function getRentacarInfo()
    {
      return $this->RentacarInfo;
    }

    /**
     * @param JP_RentacarInfo $RentacarInfo
     * @return JP_Car
     */
    public function setRentacarInfo($RentacarInfo)
    {
      $this->RentacarInfo = $RentacarInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupOffice()
    {
      return $this->PickupOffice;
    }

    /**
     * @param string $PickupOffice
     * @return JP_Car
     */
    public function setPickupOffice($PickupOffice)
    {
      $this->PickupOffice = $PickupOffice;
      return $this;
    }

    /**
     * @return string
     */
    public function getDropOffOffice()
    {
      return $this->DropOffOffice;
    }

    /**
     * @param string $DropOffOffice
     * @return JP_Car
     */
    public function setDropOffOffice($DropOffOffice)
    {
      $this->DropOffOffice = $DropOffOffice;
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
     * @return JP_Car
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
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
     * @return JP_Car
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
     * @return JP_Car
     */
    public function setEnd(\DateTime $End)
    {
      $this->End = $End->format(\DateTime::ATOM);
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
     * @return JP_Car
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
     * @return JP_Car
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
     * @return JP_Car
     */
    public function setOrder($Order)
    {
      $this->Order = $Order;
      return $this;
    }

}

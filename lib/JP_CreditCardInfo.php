<?php

class JP_CreditCardInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Surname
     */
    protected $Surname = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var JP_AddressType $Address
     */
    protected $Address = null;

    /**
     * @var JP_CreditCardType $CardCode
     */
    protected $CardCode = null;

    /**
     * @var string $CvC
     */
    protected $CvC = null;

    /**
     * @var string $CardNumber
     */
    protected $CardNumber = null;

    /**
     * @var int $SeriesCode
     */
    protected $SeriesCode = null;

    /**
     * @var string $ExpireDate
     */
    protected $ExpireDate = null;

    /**
     * @param JP_CreditCardType $CardCode
     * @param string $CvC
     * @param string $CardNumber
     * @param int $SeriesCode
     * @param string $ExpireDate
     */
    public function __construct($CardCode, $CvC, $CardNumber, $SeriesCode, $ExpireDate)
    {
      $this->CardCode = $CardCode;
      $this->CvC = $CvC;
      $this->CardNumber = $CardNumber;
      $this->SeriesCode = $SeriesCode;
      $this->ExpireDate = $ExpireDate;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_CreditCardInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
      return $this->Surname;
    }

    /**
     * @param string $Surname
     * @return JP_CreditCardInfo
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return JP_CreditCardInfo
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return JP_AddressType
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param JP_AddressType $Address
     * @return JP_CreditCardInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return JP_CreditCardType
     */
    public function getCardCode()
    {
      return $this->CardCode;
    }

    /**
     * @param JP_CreditCardType $CardCode
     * @return JP_CreditCardInfo
     */
    public function setCardCode($CardCode)
    {
      $this->CardCode = $CardCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCvC()
    {
      return $this->CvC;
    }

    /**
     * @param string $CvC
     * @return JP_CreditCardInfo
     */
    public function setCvC($CvC)
    {
      $this->CvC = $CvC;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
      return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return JP_CreditCardInfo
     */
    public function setCardNumber($CardNumber)
    {
      $this->CardNumber = $CardNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getSeriesCode()
    {
      return $this->SeriesCode;
    }

    /**
     * @param int $SeriesCode
     * @return JP_CreditCardInfo
     */
    public function setSeriesCode($SeriesCode)
    {
      $this->SeriesCode = $SeriesCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpireDate()
    {
      return $this->ExpireDate;
    }

    /**
     * @param string $ExpireDate
     * @return JP_CreditCardInfo
     */
    public function setExpireDate($ExpireDate)
    {
      $this->ExpireDate = $ExpireDate;
      return $this;
    }

}

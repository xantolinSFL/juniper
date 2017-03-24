<?php

class JP_FinalCustomerStaticData
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Surname
     */
    protected $Surname = null;

    /**
     * @var JP_FinalCustomerContactStaticData $ContactData
     */
    protected $ContactData = null;

    /**
     * @var JP_FinalCustomerAddressStaticData $AddressData
     */
    protected $AddressData = null;

    /**
     * @var JP_Document $Document
     */
    protected $Document = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    /**
     * @var \DateTime $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @var string $IntCode
     */
    protected $IntCode = null;

    /**
     * @param int $Code
     * @param string $Url
     * @param \DateTime $TimeStamp
     * @param string $IntCode
     */
    public function __construct($Code, $Url, \DateTime $TimeStamp, $IntCode)
    {
      $this->Code = $Code;
      $this->Url = $Url;
      $this->TimeStamp = $TimeStamp->format(\DateTime::ATOM);
      $this->IntCode = $IntCode;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return JP_FinalCustomerStaticData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
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
     * @return JP_FinalCustomerStaticData
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
     * @return JP_FinalCustomerStaticData
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return JP_FinalCustomerContactStaticData
     */
    public function getContactData()
    {
      return $this->ContactData;
    }

    /**
     * @param JP_FinalCustomerContactStaticData $ContactData
     * @return JP_FinalCustomerStaticData
     */
    public function setContactData($ContactData)
    {
      $this->ContactData = $ContactData;
      return $this;
    }

    /**
     * @return JP_FinalCustomerAddressStaticData
     */
    public function getAddressData()
    {
      return $this->AddressData;
    }

    /**
     * @param JP_FinalCustomerAddressStaticData $AddressData
     * @return JP_FinalCustomerStaticData
     */
    public function setAddressData($AddressData)
    {
      $this->AddressData = $AddressData;
      return $this;
    }

    /**
     * @return JP_Document
     */
    public function getDocument()
    {
      return $this->Document;
    }

    /**
     * @param JP_Document $Document
     * @return JP_FinalCustomerStaticData
     */
    public function setDocument($Document)
    {
      $this->Document = $Document;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param string $Url
     * @return JP_FinalCustomerStaticData
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeStamp()
    {
      if ($this->TimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeStamp
     * @return JP_FinalCustomerStaticData
     */
    public function setTimeStamp(\DateTime $TimeStamp)
    {
      $this->TimeStamp = $TimeStamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getIntCode()
    {
      return $this->IntCode;
    }

    /**
     * @param string $IntCode
     * @return JP_FinalCustomerStaticData
     */
    public function setIntCode($IntCode)
    {
      $this->IntCode = $IntCode;
      return $this;
    }

}

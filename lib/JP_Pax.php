<?php

class JP_Pax
{

    /**
     * @var JP_Document $Document
     */
    protected $Document = null;

    /**
     * @var ArrayOfJP_PhoneNumber $PhoneNumbers
     */
    protected $PhoneNumbers = null;

    /**
     * @var JP_BillingDataAFIP $BillingDataAFIP
     */
    protected $BillingDataAFIP = null;

    /**
     * @var ArrayOfJP_Card $Cards
     */
    protected $Cards = null;

    /**
     * @var JP_ResidentDiscount $ResidentDiscount
     */
    protected $ResidentDiscount = null;

    /**
     * @var JP_LargeFamilyDiscount $LargeFamilyDiscount
     */
    protected $LargeFamilyDiscount = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Surname
     */
    protected $Surname = null;

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var date $BornDate
     */
    protected $BornDate = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $Nationality
     */
    protected $Nationality = null;

    /**
     * @var int $IdPax
     */
    protected $IdPax = null;

    /**
     * @var anonymous55 $Gender
     */
    protected $Gender = null;

    /**
     * @param int $IdPax
     * @param anonymous55 $Gender
     */
    public function __construct($IdPax, $Gender)
    {
      $this->IdPax = $IdPax;
      $this->Gender = $Gender;
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
     * @return JP_Pax
     */
    public function setDocument($Document)
    {
      $this->Document = $Document;
      return $this;
    }

    /**
     * @return ArrayOfJP_PhoneNumber
     */
    public function getPhoneNumbers()
    {
      return $this->PhoneNumbers;
    }

    /**
     * @param ArrayOfJP_PhoneNumber $PhoneNumbers
     * @return JP_Pax
     */
    public function setPhoneNumbers($PhoneNumbers)
    {
      $this->PhoneNumbers = $PhoneNumbers;
      return $this;
    }

    /**
     * @return JP_BillingDataAFIP
     */
    public function getBillingDataAFIP()
    {
      return $this->BillingDataAFIP;
    }

    /**
     * @param JP_BillingDataAFIP $BillingDataAFIP
     * @return JP_Pax
     */
    public function setBillingDataAFIP($BillingDataAFIP)
    {
      $this->BillingDataAFIP = $BillingDataAFIP;
      return $this;
    }

    /**
     * @return ArrayOfJP_Card
     */
    public function getCards()
    {
      return $this->Cards;
    }

    /**
     * @param ArrayOfJP_Card $Cards
     * @return JP_Pax
     */
    public function setCards($Cards)
    {
      $this->Cards = $Cards;
      return $this;
    }

    /**
     * @return JP_ResidentDiscount
     */
    public function getResidentDiscount()
    {
      return $this->ResidentDiscount;
    }

    /**
     * @param JP_ResidentDiscount $ResidentDiscount
     * @return JP_Pax
     */
    public function setResidentDiscount($ResidentDiscount)
    {
      $this->ResidentDiscount = $ResidentDiscount;
      return $this;
    }

    /**
     * @return JP_LargeFamilyDiscount
     */
    public function getLargeFamilyDiscount()
    {
      return $this->LargeFamilyDiscount;
    }

    /**
     * @param JP_LargeFamilyDiscount $LargeFamilyDiscount
     * @return JP_Pax
     */
    public function setLargeFamilyDiscount($LargeFamilyDiscount)
    {
      $this->LargeFamilyDiscount = $LargeFamilyDiscount;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return JP_Pax
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
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
     * @return JP_Pax
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
     * @return JP_Pax
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return JP_Pax
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
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
     * @return JP_Pax
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return date
     */
    public function getBornDate()
    {
      return $this->BornDate;
    }

    /**
     * @param date $BornDate
     * @return JP_Pax
     */
    public function setBornDate($BornDate)
    {
      $this->BornDate = $BornDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return JP_Pax
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return JP_Pax
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return JP_Pax
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return JP_Pax
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getNationality()
    {
      return $this->Nationality;
    }

    /**
     * @param string $Nationality
     * @return JP_Pax
     */
    public function setNationality($Nationality)
    {
      $this->Nationality = $Nationality;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdPax()
    {
      return $this->IdPax;
    }

    /**
     * @param int $IdPax
     * @return JP_Pax
     */
    public function setIdPax($IdPax)
    {
      $this->IdPax = $IdPax;
      return $this;
    }

    /**
     * @return anonymous55
     */
    public function getGender()
    {
      return $this->Gender;
    }

    /**
     * @param anonymous55 $Gender
     * @return JP_Pax
     */
    public function setGender($Gender)
    {
      $this->Gender = $Gender;
      return $this;
    }

}

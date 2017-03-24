<?php

class JPSOAP_HotelInventoryContactInfo
{

    /**
     * @var ArrayOfJPSOAP_ContactNumber $PhoneNumbers
     */
    protected $PhoneNumbers = null;

    /**
     * @var ArrayOfJPSOAP_ContactNumber1 $Faxes
     */
    protected $Faxes = null;

    /**
     * @var ArrayOfJPSOAP_Email $Emails
     */
    protected $Emails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJPSOAP_ContactNumber
     */
    public function getPhoneNumbers()
    {
      return $this->PhoneNumbers;
    }

    /**
     * @param ArrayOfJPSOAP_ContactNumber $PhoneNumbers
     * @return JPSOAP_HotelInventoryContactInfo
     */
    public function setPhoneNumbers($PhoneNumbers)
    {
      $this->PhoneNumbers = $PhoneNumbers;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_ContactNumber1
     */
    public function getFaxes()
    {
      return $this->Faxes;
    }

    /**
     * @param ArrayOfJPSOAP_ContactNumber1 $Faxes
     * @return JPSOAP_HotelInventoryContactInfo
     */
    public function setFaxes($Faxes)
    {
      $this->Faxes = $Faxes;
      return $this;
    }

    /**
     * @return ArrayOfJPSOAP_Email
     */
    public function getEmails()
    {
      return $this->Emails;
    }

    /**
     * @param ArrayOfJPSOAP_Email $Emails
     * @return JPSOAP_HotelInventoryContactInfo
     */
    public function setEmails($Emails)
    {
      $this->Emails = $Emails;
      return $this;
    }

}

<?php

class JP_ContactInfo
{

    /**
     * @var ArrayOfJP_PhoneNumber $PhoneNumbers
     */
    protected $PhoneNumbers = null;

    /**
     * @var ArrayOfJP_Fax $Faxes
     */
    protected $Faxes = null;

    /**
     * @var ArrayOfJP_Email $Emails
     */
    protected $Emails = null;

    
    public function __construct()
    {
    
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
     * @return JP_ContactInfo
     */
    public function setPhoneNumbers($PhoneNumbers)
    {
      $this->PhoneNumbers = $PhoneNumbers;
      return $this;
    }

    /**
     * @return ArrayOfJP_Fax
     */
    public function getFaxes()
    {
      return $this->Faxes;
    }

    /**
     * @param ArrayOfJP_Fax $Faxes
     * @return JP_ContactInfo
     */
    public function setFaxes($Faxes)
    {
      $this->Faxes = $Faxes;
      return $this;
    }

    /**
     * @return ArrayOfJP_Email
     */
    public function getEmails()
    {
      return $this->Emails;
    }

    /**
     * @param ArrayOfJP_Email $Emails
     * @return JP_ContactInfo
     */
    public function setEmails($Emails)
    {
      $this->Emails = $Emails;
      return $this;
    }

}

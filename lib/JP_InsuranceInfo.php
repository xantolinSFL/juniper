<?php

namespace Juniper\Webservice;

class JP_InsuranceInfo
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfJP_Description $Descriptions
     */
    protected $Descriptions = null;

    /**
     * @var ArrayOfJP_ImageLong $Images
     */
    protected $Images = null;

    /**
     * @var ArrayOfJP_Coverage $Coverages
     */
    protected $Coverages = null;

    /**
     * @var JP_EmergencyContact $EmergencyContact
     */
    protected $EmergencyContact = null;

    
    public function __construct()
    {
    
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
     * @return JP_InsuranceInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfJP_Description
     */
    public function getDescriptions()
    {
      return $this->Descriptions;
    }

    /**
     * @param ArrayOfJP_Description $Descriptions
     * @return JP_InsuranceInfo
     */
    public function setDescriptions($Descriptions)
    {
      $this->Descriptions = $Descriptions;
      return $this;
    }

    /**
     * @return ArrayOfJP_ImageLong
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param ArrayOfJP_ImageLong $Images
     * @return JP_InsuranceInfo
     */
    public function setImages($Images)
    {
      $this->Images = $Images;
      return $this;
    }

    /**
     * @return ArrayOfJP_Coverage
     */
    public function getCoverages()
    {
      return $this->Coverages;
    }

    /**
     * @param ArrayOfJP_Coverage $Coverages
     * @return JP_InsuranceInfo
     */
    public function setCoverages($Coverages)
    {
      $this->Coverages = $Coverages;
      return $this;
    }

    /**
     * @return JP_EmergencyContact
     */
    public function getEmergencyContact()
    {
      return $this->EmergencyContact;
    }

    /**
     * @param JP_EmergencyContact $EmergencyContact
     * @return JP_InsuranceInfo
     */
    public function setEmergencyContact($EmergencyContact)
    {
      $this->EmergencyContact = $EmergencyContact;
      return $this;
    }

}

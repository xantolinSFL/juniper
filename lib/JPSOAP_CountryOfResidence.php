<?php

class JPSOAP_CountryOfResidence
{

    /**
     * @var JP_Country[] $Country
     */
    protected $Country = null;

    /**
     * @var boolean $Allowed
     */
    protected $Allowed = null;

    /**
     * @param boolean $Allowed
     */
    public function __construct($Allowed)
    {
      $this->Allowed = $Allowed;
    }

    /**
     * @return JP_Country[]
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param JP_Country[] $Country
     * @return JPSOAP_CountryOfResidence
     */
    public function setCountry(array $Country = null)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowed()
    {
      return $this->Allowed;
    }

    /**
     * @param boolean $Allowed
     * @return JPSOAP_CountryOfResidence
     */
    public function setAllowed($Allowed)
    {
      $this->Allowed = $Allowed;
      return $this;
    }

}

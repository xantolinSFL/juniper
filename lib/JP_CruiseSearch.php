<?php

namespace Juniper\Webservice;

class JP_CruiseSearch
{

    /**
     * @var boolean $Married
     */
    protected $Married = null;

    /**
     * @var string $SelectionCode
     */
    protected $SelectionCode = null;

    /**
     * @param boolean $Married
     * @param string $SelectionCode
     */
    public function __construct($Married, $SelectionCode)
    {
      $this->Married = $Married;
      $this->SelectionCode = $SelectionCode;
    }

    /**
     * @return boolean
     */
    public function getMarried()
    {
      return $this->Married;
    }

    /**
     * @param boolean $Married
     * @return JP_CruiseSearch
     */
    public function setMarried($Married)
    {
      $this->Married = $Married;
      return $this;
    }

    /**
     * @return string
     */
    public function getSelectionCode()
    {
      return $this->SelectionCode;
    }

    /**
     * @param string $SelectionCode
     * @return JP_CruiseSearch
     */
    public function setSelectionCode($SelectionCode)
    {
      $this->SelectionCode = $SelectionCode;
      return $this;
    }

}

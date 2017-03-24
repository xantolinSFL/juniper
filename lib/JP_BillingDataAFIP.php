<?php

class JP_BillingDataAFIP
{

    /**
     * @var JP_BillingType $BillingType
     */
    protected $BillingType = null;

    /**
     * @var int $BillingDocType
     */
    protected $BillingDocType = null;

    /**
     * @var int $FiscalCondition
     */
    protected $FiscalCondition = null;

    /**
     * @param JP_BillingType $BillingType
     * @param int $BillingDocType
     * @param int $FiscalCondition
     */
    public function __construct($BillingType, $BillingDocType, $FiscalCondition)
    {
      $this->BillingType = $BillingType;
      $this->BillingDocType = $BillingDocType;
      $this->FiscalCondition = $FiscalCondition;
    }

    /**
     * @return JP_BillingType
     */
    public function getBillingType()
    {
      return $this->BillingType;
    }

    /**
     * @param JP_BillingType $BillingType
     * @return JP_BillingDataAFIP
     */
    public function setBillingType($BillingType)
    {
      $this->BillingType = $BillingType;
      return $this;
    }

    /**
     * @return int
     */
    public function getBillingDocType()
    {
      return $this->BillingDocType;
    }

    /**
     * @param int $BillingDocType
     * @return JP_BillingDataAFIP
     */
    public function setBillingDocType($BillingDocType)
    {
      $this->BillingDocType = $BillingDocType;
      return $this;
    }

    /**
     * @return int
     */
    public function getFiscalCondition()
    {
      return $this->FiscalCondition;
    }

    /**
     * @param int $FiscalCondition
     * @return JP_BillingDataAFIP
     */
    public function setFiscalCondition($FiscalCondition)
    {
      $this->FiscalCondition = $FiscalCondition;
      return $this;
    }

}

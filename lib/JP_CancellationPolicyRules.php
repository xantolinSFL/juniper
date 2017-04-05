<?php

namespace Juniper\Webservice;

class JP_CancellationPolicyRules
{

    /**
     * @var JP_FirstDayCostCancellation $FirstDayCostCancellation
     */
    protected $FirstDayCostCancellation = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var ArrayOfJP_Rule $PolicyRules
     */
    protected $PolicyRules = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @param string $CurrencyCode
     */
    public function __construct($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
    }

    /**
     * @return JP_FirstDayCostCancellation
     */
    public function getFirstDayCostCancellation()
    {
      return $this->FirstDayCostCancellation;
    }

    /**
     * @param JP_FirstDayCostCancellation $FirstDayCostCancellation
     * @return JP_CancellationPolicyRules
     */
    public function setFirstDayCostCancellation($FirstDayCostCancellation)
    {
      $this->FirstDayCostCancellation = $FirstDayCostCancellation;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_CancellationPolicyRules
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return ArrayOfJP_Rule
     */
    public function getPolicyRules()
    {
      return $this->PolicyRules;
    }

    /**
     * @param ArrayOfJP_Rule $PolicyRules
     * @return JP_CancellationPolicyRules
     */
    public function setPolicyRules($PolicyRules)
    {
      $this->PolicyRules = $PolicyRules;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return JP_CancellationPolicyRules
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

}

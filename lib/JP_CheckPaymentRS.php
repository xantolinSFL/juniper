<?php

namespace Juniper\Webservice;

class JP_CheckPaymentRS
{

    /**
     * @var ArrayOfJP_ErrorType $Errors
     */
    protected $Errors = null;

    /**
     * @var JP_Warnings $Warnings
     */
    protected $Warnings = null;

    /**
     * @var JP_CheckPaymentResponse $Response
     */
    protected $Response = null;

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
     * @param string $Url
     * @param \DateTime $TimeStamp
     * @param string $IntCode
     */
    public function __construct($Url, \DateTime $TimeStamp, $IntCode)
    {
      $this->Url = $Url;
      $this->TimeStamp = $TimeStamp->format(\DateTime::ATOM);
      $this->IntCode = $IntCode;
    }

    /**
     * @return ArrayOfJP_ErrorType
     */
    public function getErrors()
    {
      return $this->Errors;
    }

    /**
     * @param ArrayOfJP_ErrorType $Errors
     * @return JP_CheckPaymentRS
     */
    public function setErrors($Errors)
    {
      $this->Errors = $Errors;
      return $this;
    }

    /**
     * @return JP_Warnings
     */
    public function getWarnings()
    {
      return $this->Warnings;
    }

    /**
     * @param JP_Warnings $Warnings
     * @return JP_CheckPaymentRS
     */
    public function setWarnings($Warnings)
    {
      $this->Warnings = $Warnings;
      return $this;
    }

    /**
     * @return JP_CheckPaymentResponse
     */
    public function getResponse()
    {
      return $this->Response;
    }

    /**
     * @param JP_CheckPaymentResponse $Response
     * @return JP_CheckPaymentRS
     */
    public function setResponse($Response)
    {
      $this->Response = $Response;
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
     * @return JP_CheckPaymentRS
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
     * @return JP_CheckPaymentRS
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
     * @return JP_CheckPaymentRS
     */
    public function setIntCode($IntCode)
    {
      $this->IntCode = $IntCode;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JP_AvailResponseRS
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
     * @var string $ExtraInfo
     */
    protected $ExtraInfo = null;

    /**
     * @var JP_Results $Results
     */
    protected $Results = null;

    /**
     * @var string $ProcessingTime
     */
    protected $ProcessingTime = null;

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
     * @param string $ProcessingTime
     * @param string $Url
     * @param \DateTime $TimeStamp
     * @param string $IntCode
     */
    public function __construct($ProcessingTime, $Url, \DateTime $TimeStamp, $IntCode)
    {
      $this->ProcessingTime = $ProcessingTime;
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
     * @return JP_AvailResponseRS
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
     * @return JP_AvailResponseRS
     */
    public function setWarnings($Warnings)
    {
      $this->Warnings = $Warnings;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo()
    {
      return $this->ExtraInfo;
    }

    /**
     * @param string $ExtraInfo
     * @return JP_AvailResponseRS
     */
    public function setExtraInfo($ExtraInfo)
    {
      $this->ExtraInfo = $ExtraInfo;
      return $this;
    }

    /**
     * @return JP_Results
     */
    public function getResults()
    {
      return $this->Results;
    }

    /**
     * @param JP_Results $Results
     * @return JP_AvailResponseRS
     */
    public function setResults($Results)
    {
      $this->Results = $Results;
      return $this;
    }

    /**
     * @return string
     */
    public function getProcessingTime()
    {
      return $this->ProcessingTime;
    }

    /**
     * @param string $ProcessingTime
     * @return JP_AvailResponseRS
     */
    public function setProcessingTime($ProcessingTime)
    {
      $this->ProcessingTime = $ProcessingTime;
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
     * @return JP_AvailResponseRS
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
     * @return JP_AvailResponseRS
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
     * @return JP_AvailResponseRS
     */
    public function setIntCode($IntCode)
    {
      $this->IntCode = $IntCode;
      return $this;
    }

}

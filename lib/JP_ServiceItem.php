<?php

class JP_ServiceItem extends JP_BaseItem
{

    /**
     * @var JP_ServiceInfo $ServiceInfo
     */
    protected $ServiceInfo = null;

    /**
     * @var JP_PackageAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var ArrayOfJP_ServiceOption $ServiceOptions
     */
    protected $ServiceOptions = null;

    /**
     * @var ArrayOfJP_RelPax $RelPaxes
     */
    protected $RelPaxes = null;

    /**
     * @var date $Start
     */
    protected $Start = null;

    /**
     * @var date $End
     */
    protected $End = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $ItemId
     * @param JP_ItemStatus $Status
     * @param date $Start
     * @param date $End
     * @param string $Code
     */
    public function __construct($ItemId, $Status, $Start, $End, $Code)
    {
      parent::__construct($ItemId, $Status);
      $this->Start = $Start;
      $this->End = $End;
      $this->Code = $Code;
    }

    /**
     * @return JP_ServiceInfo
     */
    public function getServiceInfo()
    {
      return $this->ServiceInfo;
    }

    /**
     * @param JP_ServiceInfo $ServiceInfo
     * @return JP_ServiceItem
     */
    public function setServiceInfo($ServiceInfo)
    {
      $this->ServiceInfo = $ServiceInfo;
      return $this;
    }

    /**
     * @return JP_PackageAdditionalElements
     */
    public function getAdditionalElements()
    {
      return $this->AdditionalElements;
    }

    /**
     * @param JP_PackageAdditionalElements $AdditionalElements
     * @return JP_ServiceItem
     */
    public function setAdditionalElements($AdditionalElements)
    {
      $this->AdditionalElements = $AdditionalElements;
      return $this;
    }

    /**
     * @return JP_CancellationPolicyRules
     */
    public function getCancellationPolicy()
    {
      return $this->CancellationPolicy;
    }

    /**
     * @param JP_CancellationPolicyRules $CancellationPolicy
     * @return JP_ServiceItem
     */
    public function setCancellationPolicy($CancellationPolicy)
    {
      $this->CancellationPolicy = $CancellationPolicy;
      return $this;
    }

    /**
     * @return ArrayOfJP_ServiceOption
     */
    public function getServiceOptions()
    {
      return $this->ServiceOptions;
    }

    /**
     * @param ArrayOfJP_ServiceOption $ServiceOptions
     * @return JP_ServiceItem
     */
    public function setServiceOptions($ServiceOptions)
    {
      $this->ServiceOptions = $ServiceOptions;
      return $this;
    }

    /**
     * @return ArrayOfJP_RelPax
     */
    public function getRelPaxes()
    {
      return $this->RelPaxes;
    }

    /**
     * @param ArrayOfJP_RelPax $RelPaxes
     * @return JP_ServiceItem
     */
    public function setRelPaxes($RelPaxes)
    {
      $this->RelPaxes = $RelPaxes;
      return $this;
    }

    /**
     * @return date
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param date $Start
     * @return JP_ServiceItem
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return date
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param date $End
     * @return JP_ServiceItem
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return JP_ServiceItem
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

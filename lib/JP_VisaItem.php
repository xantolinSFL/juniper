<?php

namespace Juniper\Webservice;

class JP_VisaItem extends JP_BaseItem
{

    /**
     * @var JP_VisaInfo $VisaInfo
     */
    protected $VisaInfo = null;

    /**
     * @var JP_PackageAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var ArrayOfJP_VisaOption $VisaOptions
     */
    protected $VisaOptions = null;

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
     * @return JP_VisaInfo
     */
    public function getVisaInfo()
    {
      return $this->VisaInfo;
    }

    /**
     * @param JP_VisaInfo $VisaInfo
     * @return JP_VisaItem
     */
    public function setVisaInfo($VisaInfo)
    {
      $this->VisaInfo = $VisaInfo;
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
     * @return JP_VisaItem
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
     * @return JP_VisaItem
     */
    public function setCancellationPolicy($CancellationPolicy)
    {
      $this->CancellationPolicy = $CancellationPolicy;
      return $this;
    }

    /**
     * @return ArrayOfJP_VisaOption
     */
    public function getVisaOptions()
    {
      return $this->VisaOptions;
    }

    /**
     * @param ArrayOfJP_VisaOption $VisaOptions
     * @return JP_VisaItem
     */
    public function setVisaOptions($VisaOptions)
    {
      $this->VisaOptions = $VisaOptions;
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
     * @return JP_VisaItem
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
     * @return JP_VisaItem
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
     * @return JP_VisaItem
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
     * @return JP_VisaItem
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

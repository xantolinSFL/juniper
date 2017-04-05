<?php

namespace Juniper\Webservice;

class JP_PackageItem extends JP_BaseItem
{

    /**
     * @var JP_PackageInfo $PackageInfo
     */
    protected $PackageInfo = null;

    /**
     * @var ArrayOfJP_PackageStay $Stays
     */
    protected $Stays = null;

    /**
     * @var JP_PackageAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var ArrayOfJP_RelPax $RelPaxes
     */
    protected $RelPaxes = null;

    /**
     * @var ArrayOfJP_PackageInfoAFIPAmount $AFIPInformation
     */
    protected $AFIPInformation = null;

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
     * @return JP_PackageInfo
     */
    public function getPackageInfo()
    {
      return $this->PackageInfo;
    }

    /**
     * @param JP_PackageInfo $PackageInfo
     * @return JP_PackageItem
     */
    public function setPackageInfo($PackageInfo)
    {
      $this->PackageInfo = $PackageInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageStay
     */
    public function getStays()
    {
      return $this->Stays;
    }

    /**
     * @param ArrayOfJP_PackageStay $Stays
     * @return JP_PackageItem
     */
    public function setStays($Stays)
    {
      $this->Stays = $Stays;
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
     * @return JP_PackageItem
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
     * @return JP_PackageItem
     */
    public function setCancellationPolicy($CancellationPolicy)
    {
      $this->CancellationPolicy = $CancellationPolicy;
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
     * @return JP_PackageItem
     */
    public function setRelPaxes($RelPaxes)
    {
      $this->RelPaxes = $RelPaxes;
      return $this;
    }

    /**
     * @return ArrayOfJP_PackageInfoAFIPAmount
     */
    public function getAFIPInformation()
    {
      return $this->AFIPInformation;
    }

    /**
     * @param ArrayOfJP_PackageInfoAFIPAmount $AFIPInformation
     * @return JP_PackageItem
     */
    public function setAFIPInformation($AFIPInformation)
    {
      $this->AFIPInformation = $AFIPInformation;
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
     * @return JP_PackageItem
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
     * @return JP_PackageItem
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
     * @return JP_PackageItem
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

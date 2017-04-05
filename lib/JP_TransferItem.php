<?php

namespace Juniper\Webservice;

class JP_TransferItem extends JP_BaseItem
{

    /**
     * @var JP_TransferInfo $TransferInfo
     */
    protected $TransferInfo = null;

    /**
     * @var JP_PackageAdditionalElements $AdditionalElements
     */
    protected $AdditionalElements = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var ArrayOfJP_TransferOption $TransferOptions
     */
    protected $TransferOptions = null;

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
     * @return JP_TransferInfo
     */
    public function getTransferInfo()
    {
      return $this->TransferInfo;
    }

    /**
     * @param JP_TransferInfo $TransferInfo
     * @return JP_TransferItem
     */
    public function setTransferInfo($TransferInfo)
    {
      $this->TransferInfo = $TransferInfo;
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
     * @return JP_TransferItem
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
     * @return JP_TransferItem
     */
    public function setCancellationPolicy($CancellationPolicy)
    {
      $this->CancellationPolicy = $CancellationPolicy;
      return $this;
    }

    /**
     * @return ArrayOfJP_TransferOption
     */
    public function getTransferOptions()
    {
      return $this->TransferOptions;
    }

    /**
     * @param ArrayOfJP_TransferOption $TransferOptions
     * @return JP_TransferItem
     */
    public function setTransferOptions($TransferOptions)
    {
      $this->TransferOptions = $TransferOptions;
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
     * @return JP_TransferItem
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
     * @return JP_TransferItem
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
     * @return JP_TransferItem
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
     * @return JP_TransferItem
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

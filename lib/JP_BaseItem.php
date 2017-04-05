<?php

namespace Juniper\Webservice;

abstract class JP_BaseItem
{

    /**
     * @var JP_ExternalInfo $ExternalInfo
     */
    protected $ExternalInfo = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    /**
     * @var JP_CancellationPolicyRules $CancellationPolicyCost
     */
    protected $CancellationPolicyCost = null;

    /**
     * @var ArrayOfJP_Comment $Comments
     */
    protected $Comments = null;

    /**
     * @var string $ItemId
     */
    protected $ItemId = null;

    /**
     * @var JP_ItemStatus $Status
     */
    protected $Status = null;

    /**
     * @param string $ItemId
     * @param JP_ItemStatus $Status
     */
    public function __construct($ItemId, $Status)
    {
      $this->ItemId = $ItemId;
      $this->Status = $Status;
    }

    /**
     * @return JP_ExternalInfo
     */
    public function getExternalInfo()
    {
      return $this->ExternalInfo;
    }

    /**
     * @param JP_ExternalInfo $ExternalInfo
     * @return JP_BaseItem
     */
    public function setExternalInfo($ExternalInfo)
    {
      $this->ExternalInfo = $ExternalInfo;
      return $this;
    }

    /**
     * @return ArrayOfJP_Price
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfJP_Price $Prices
     * @return JP_BaseItem
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
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
     * @return JP_BaseItem
     */
    public function setCancellationPolicy($CancellationPolicy)
    {
      $this->CancellationPolicy = $CancellationPolicy;
      return $this;
    }

    /**
     * @return JP_CancellationPolicyRules
     */
    public function getCancellationPolicyCost()
    {
      return $this->CancellationPolicyCost;
    }

    /**
     * @param JP_CancellationPolicyRules $CancellationPolicyCost
     * @return JP_BaseItem
     */
    public function setCancellationPolicyCost($CancellationPolicyCost)
    {
      $this->CancellationPolicyCost = $CancellationPolicyCost;
      return $this;
    }

    /**
     * @return ArrayOfJP_Comment
     */
    public function getComments()
    {
      return $this->Comments;
    }

    /**
     * @param ArrayOfJP_Comment $Comments
     * @return JP_BaseItem
     */
    public function setComments($Comments)
    {
      $this->Comments = $Comments;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
      return $this->ItemId;
    }

    /**
     * @param string $ItemId
     * @return JP_BaseItem
     */
    public function setItemId($ItemId)
    {
      $this->ItemId = $ItemId;
      return $this;
    }

    /**
     * @return JP_ItemStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param JP_ItemStatus $Status
     * @return JP_BaseItem
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}

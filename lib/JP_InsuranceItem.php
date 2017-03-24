<?php

class JP_InsuranceItem extends JP_BaseItem
{

    /**
     * @var JP_InsuranceInfo $InsuranceInfo
     */
    protected $InsuranceInfo = null;

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
     * @param string $ItemId
     * @param JP_ItemStatus $Status
     * @param date $Start
     * @param date $End
     */
    public function __construct($ItemId, $Status, $Start, $End)
    {
      parent::__construct($ItemId, $Status);
      $this->Start = $Start;
      $this->End = $End;
    }

    /**
     * @return JP_InsuranceInfo
     */
    public function getInsuranceInfo()
    {
      return $this->InsuranceInfo;
    }

    /**
     * @param JP_InsuranceInfo $InsuranceInfo
     * @return JP_InsuranceItem
     */
    public function setInsuranceInfo($InsuranceInfo)
    {
      $this->InsuranceInfo = $InsuranceInfo;
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
     * @return JP_InsuranceItem
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
     * @return JP_InsuranceItem
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
     * @return JP_InsuranceItem
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

}

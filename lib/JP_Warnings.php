<?php

class JP_Warnings
{

    /**
     * @var JP_WarningType[] $Warning
     */
    protected $Warning = null;

    /**
     * @var JP_CancelInformation[] $CancelInfo
     */
    protected $CancelInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_WarningType[]
     */
    public function getWarning()
    {
      return $this->Warning;
    }

    /**
     * @param JP_WarningType[] $Warning
     * @return JP_Warnings
     */
    public function setWarning(array $Warning = null)
    {
      $this->Warning = $Warning;
      return $this;
    }

    /**
     * @return JP_CancelInformation[]
     */
    public function getCancelInfo()
    {
      return $this->CancelInfo;
    }

    /**
     * @param JP_CancelInformation[] $CancelInfo
     * @return JP_Warnings
     */
    public function setCancelInfo(array $CancelInfo = null)
    {
      $this->CancelInfo = $CancelInfo;
      return $this;
    }

}

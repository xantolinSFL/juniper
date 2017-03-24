<?php

class JP_OperationSchedule
{

    /**
     * @var ArrayOfJP_OperationTime $OperationTimes
     */
    protected $OperationTimes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_OperationTime
     */
    public function getOperationTimes()
    {
      return $this->OperationTimes;
    }

    /**
     * @param ArrayOfJP_OperationTime $OperationTimes
     * @return JP_OperationSchedule
     */
    public function setOperationTimes($OperationTimes)
    {
      $this->OperationTimes = $OperationTimes;
      return $this;
    }

}

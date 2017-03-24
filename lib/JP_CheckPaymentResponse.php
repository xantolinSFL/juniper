<?php

class JP_CheckPaymentResponse
{

    /**
     * @var string $CheckPaymentToken
     */
    protected $CheckPaymentToken = null;

    /**
     * @var string $Score
     */
    protected $Score = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var boolean $IsFraud
     */
    protected $IsFraud = null;

    /**
     * @param string $Score
     * @param string $Status
     * @param boolean $IsFraud
     */
    public function __construct($Score, $Status, $IsFraud)
    {
      $this->Score = $Score;
      $this->Status = $Status;
      $this->IsFraud = $IsFraud;
    }

    /**
     * @return string
     */
    public function getCheckPaymentToken()
    {
      return $this->CheckPaymentToken;
    }

    /**
     * @param string $CheckPaymentToken
     * @return JP_CheckPaymentResponse
     */
    public function setCheckPaymentToken($CheckPaymentToken)
    {
      $this->CheckPaymentToken = $CheckPaymentToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getScore()
    {
      return $this->Score;
    }

    /**
     * @param string $Score
     * @return JP_CheckPaymentResponse
     */
    public function setScore($Score)
    {
      $this->Score = $Score;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return JP_CheckPaymentResponse
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFraud()
    {
      return $this->IsFraud;
    }

    /**
     * @param boolean $IsFraud
     * @return JP_CheckPaymentResponse
     */
    public function setIsFraud($IsFraud)
    {
      $this->IsFraud = $IsFraud;
      return $this;
    }

}

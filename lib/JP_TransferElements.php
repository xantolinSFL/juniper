<?php

class JP_TransferElements
{

    /**
     * @var JP_TransferElement $TransferElement
     */
    protected $TransferElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_TransferElement
     */
    public function getTransferElement()
    {
      return $this->TransferElement;
    }

    /**
     * @param JP_TransferElement $TransferElement
     * @return JP_TransferElements
     */
    public function setTransferElement($TransferElement)
    {
      $this->TransferElement = $TransferElement;
      return $this;
    }

}

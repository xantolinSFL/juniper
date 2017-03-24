<?php

class JP_PriceInformationTransfer
{

    /**
     * @var JP_TransferInfo $TransferInfo
     */
    protected $TransferInfo = null;

    /**
     * @var ArrayOfJP_TransferOption $TransferOptions
     */
    protected $TransferOptions = null;

    /**
     * @var ArrayOfJP_Price $Prices
     */
    protected $Prices = null;

    /**
     * @var ArrayOfJP_Origin $Origins
     */
    protected $Origins = null;

    /**
     * @var ArrayOfJP_Destination $Destinations
     */
    protected $Destinations = null;

    
    public function __construct()
    {
    
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
     * @return JP_PriceInformationTransfer
     */
    public function setTransferInfo($TransferInfo)
    {
      $this->TransferInfo = $TransferInfo;
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
     * @return JP_PriceInformationTransfer
     */
    public function setTransferOptions($TransferOptions)
    {
      $this->TransferOptions = $TransferOptions;
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
     * @return JP_PriceInformationTransfer
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

    /**
     * @return ArrayOfJP_Origin
     */
    public function getOrigins()
    {
      return $this->Origins;
    }

    /**
     * @param ArrayOfJP_Origin $Origins
     * @return JP_PriceInformationTransfer
     */
    public function setOrigins($Origins)
    {
      $this->Origins = $Origins;
      return $this;
    }

    /**
     * @return ArrayOfJP_Destination
     */
    public function getDestinations()
    {
      return $this->Destinations;
    }

    /**
     * @param ArrayOfJP_Destination $Destinations
     * @return JP_PriceInformationTransfer
     */
    public function setDestinations($Destinations)
    {
      $this->Destinations = $Destinations;
      return $this;
    }

}

<?php

class JPSOAP_Image
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    /**
     * @param string $_
     * @param string $Url
     */
    public function __construct($_, $Url)
    {
      $this->_ = $_;
      $this->Url = $Url;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return JPSOAP_Image
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->Url;
    }

    /**
     * @param string $Url
     * @return JPSOAP_Image
     */
    public function setUrl($Url)
    {
      $this->Url = $Url;
      return $this;
    }

}

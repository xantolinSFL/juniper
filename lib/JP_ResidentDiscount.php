<?php

class JP_ResidentDiscount
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Municipality
     */
    protected $Municipality = null;

    /**
     * @param string $_
     * @param string $Type
     * @param string $Municipality
     */
    public function __construct($_, $Type, $Municipality)
    {
      $this->_ = $_;
      $this->Type = $Type;
      $this->Municipality = $Municipality;
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
     * @return JP_ResidentDiscount
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return JP_ResidentDiscount
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getMunicipality()
    {
      return $this->Municipality;
    }

    /**
     * @param string $Municipality
     * @return JP_ResidentDiscount
     */
    public function setMunicipality($Municipality)
    {
      $this->Municipality = $Municipality;
      return $this;
    }

}

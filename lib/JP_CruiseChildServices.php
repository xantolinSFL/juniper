<?php

class JP_CruiseChildServices
{

    /**
     * @var boolean $Creche
     */
    protected $Creche = null;

    /**
     * @var boolean $Ninzone
     */
    protected $Ninzone = null;

    /**
     * @var boolean $Youthzone
     */
    protected $Youthzone = null;

    /**
     * @var boolean $Ninpool
     */
    protected $Ninpool = null;

    /**
     * @var boolean $Youthprogram
     */
    protected $Youthprogram = null;

    /**
     * @param boolean $Creche
     * @param boolean $Ninzone
     * @param boolean $Youthzone
     * @param boolean $Ninpool
     * @param boolean $Youthprogram
     */
    public function __construct($Creche, $Ninzone, $Youthzone, $Ninpool, $Youthprogram)
    {
      $this->Creche = $Creche;
      $this->Ninzone = $Ninzone;
      $this->Youthzone = $Youthzone;
      $this->Ninpool = $Ninpool;
      $this->Youthprogram = $Youthprogram;
    }

    /**
     * @return boolean
     */
    public function getCreche()
    {
      return $this->Creche;
    }

    /**
     * @param boolean $Creche
     * @return JP_CruiseChildServices
     */
    public function setCreche($Creche)
    {
      $this->Creche = $Creche;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNinzone()
    {
      return $this->Ninzone;
    }

    /**
     * @param boolean $Ninzone
     * @return JP_CruiseChildServices
     */
    public function setNinzone($Ninzone)
    {
      $this->Ninzone = $Ninzone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getYouthzone()
    {
      return $this->Youthzone;
    }

    /**
     * @param boolean $Youthzone
     * @return JP_CruiseChildServices
     */
    public function setYouthzone($Youthzone)
    {
      $this->Youthzone = $Youthzone;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNinpool()
    {
      return $this->Ninpool;
    }

    /**
     * @param boolean $Ninpool
     * @return JP_CruiseChildServices
     */
    public function setNinpool($Ninpool)
    {
      $this->Ninpool = $Ninpool;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getYouthprogram()
    {
      return $this->Youthprogram;
    }

    /**
     * @param boolean $Youthprogram
     * @return JP_CruiseChildServices
     */
    public function setYouthprogram($Youthprogram)
    {
      $this->Youthprogram = $Youthprogram;
      return $this;
    }

}

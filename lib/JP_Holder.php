<?php

class JP_Holder
{

    /**
     * @var JP_RelPax $RelPax
     */
    protected $RelPax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RelPax
     */
    public function getRelPax()
    {
      return $this->RelPax;
    }

    /**
     * @param JP_RelPax $RelPax
     * @return JP_Holder
     */
    public function setRelPax($RelPax)
    {
      $this->RelPax = $RelPax;
      return $this;
    }

}

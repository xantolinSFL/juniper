<?php

abstract class JP_BaseModifyElement
{

    /**
     * @var JP_BookingCode $ModifyCode
     */
    protected $ModifyCode = null;

    /**
     * @var ArrayOfJP_RelPaxDist $RelPaxesDist
     */
    protected $RelPaxesDist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_BookingCode
     */
    public function getModifyCode()
    {
      return $this->ModifyCode;
    }

    /**
     * @param JP_BookingCode $ModifyCode
     * @return JP_BaseModifyElement
     */
    public function setModifyCode($ModifyCode)
    {
      $this->ModifyCode = $ModifyCode;
      return $this;
    }

    /**
     * @return ArrayOfJP_RelPaxDist
     */
    public function getRelPaxesDist()
    {
      return $this->RelPaxesDist;
    }

    /**
     * @param ArrayOfJP_RelPaxDist $RelPaxesDist
     * @return JP_BaseModifyElement
     */
    public function setRelPaxesDist($RelPaxesDist)
    {
      $this->RelPaxesDist = $RelPaxesDist;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JP_CheckPaymentRequiredFieldsResponse
{

    /**
     * @var ArrayOfJP_RequiredField $Fields
     */
    protected $Fields = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfJP_RequiredField
     */
    public function getFields()
    {
      return $this->Fields;
    }

    /**
     * @param ArrayOfJP_RequiredField $Fields
     * @return JP_CheckPaymentRequiredFieldsResponse
     */
    public function setFields($Fields)
    {
      $this->Fields = $Fields;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class JP_CreditCard
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var JP_CreditCardType $Code
     */
    protected $Code = null;

    /**
     * @param string $_
     * @param JP_CreditCardType $Code
     */
    public function __construct($_, $Code)
    {
      $this->_ = $_;
      $this->Code = $Code;
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
     * @return JP_CreditCard
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return JP_CreditCardType
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param JP_CreditCardType $Code
     * @return JP_CreditCard
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

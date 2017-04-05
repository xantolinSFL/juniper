<?php

namespace Juniper\Webservice;

class JP_Agent
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @param string $Name
     * @param string $Email
     */
    public function __construct($Name, $Email)
    {
      $this->Name = $Name;
      $this->Email = $Email;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_Agent
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return JP_Agent
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

}

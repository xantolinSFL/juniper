<?php

namespace Juniper\Webservice;

class JP_Login
{

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @param string $Password
     * @param string $Email
     */
    public function __construct($Password, $Email)
    {
      $this->Password = $Password;
      $this->Email = $Email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return JP_Login
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
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
     * @return JP_Login
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

}

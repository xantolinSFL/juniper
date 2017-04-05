<?php

namespace Juniper\Webservice;

class JP_Routes
{

    /**
     * @var JP_Route[] $Route
     */
    protected $Route = null;

    /**
     * @var string $ValidatingCarrier
     */
    protected $ValidatingCarrier = null;

    /**
     * @param string $ValidatingCarrier
     */
    public function __construct($ValidatingCarrier)
    {
      $this->ValidatingCarrier = $ValidatingCarrier;
    }

    /**
     * @return JP_Route[]
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param JP_Route[] $Route
     * @return JP_Routes
     */
    public function setRoute(array $Route = null)
    {
      $this->Route = $Route;
      return $this;
    }

    /**
     * @return string
     */
    public function getValidatingCarrier()
    {
      return $this->ValidatingCarrier;
    }

    /**
     * @param string $ValidatingCarrier
     * @return JP_Routes
     */
    public function setValidatingCarrier($ValidatingCarrier)
    {
      $this->ValidatingCarrier = $ValidatingCarrier;
      return $this;
    }

}

<?php

namespace Juniper\Webservice;

class ArrayOfJP_CruiseFlightRoute implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruiseFlightRoute[] $Route
     */
    protected $Route = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseFlightRoute[]
     */
    public function getRoute()
    {
      return $this->Route;
    }

    /**
     * @param JP_CruiseFlightRoute[] $Route
     * @return ArrayOfJP_CruiseFlightRoute
     */
    public function setRoute(array $Route = null)
    {
      $this->Route = $Route;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Route[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruiseFlightRoute
     */
    public function offsetGet($offset)
    {
      return $this->Route[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruiseFlightRoute $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Route[] = $value;
      } else {
        $this->Route[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Route[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruiseFlightRoute Return the current element
     */
    public function current()
    {
      return current($this->Route);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Route);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Route);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Route);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruiseFlightRoute Return count of elements
     */
    public function count()
    {
      return count($this->Route);
    }

}

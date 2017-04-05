<?php

namespace Juniper\Webservice;

class ArrayOfJP_FlightSupplement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_FlightSupplement[] $FlightSupplement
     */
    protected $FlightSupplement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_FlightSupplement[]
     */
    public function getFlightSupplement()
    {
      return $this->FlightSupplement;
    }

    /**
     * @param JP_FlightSupplement[] $FlightSupplement
     * @return ArrayOfJP_FlightSupplement
     */
    public function setFlightSupplement(array $FlightSupplement = null)
    {
      $this->FlightSupplement = $FlightSupplement;
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
      return isset($this->FlightSupplement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_FlightSupplement
     */
    public function offsetGet($offset)
    {
      return $this->FlightSupplement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_FlightSupplement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FlightSupplement[] = $value;
      } else {
        $this->FlightSupplement[$offset] = $value;
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
      unset($this->FlightSupplement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_FlightSupplement Return the current element
     */
    public function current()
    {
      return current($this->FlightSupplement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FlightSupplement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FlightSupplement);
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
      reset($this->FlightSupplement);
    }

    /**
     * Countable implementation
     *
     * @return JP_FlightSupplement Return count of elements
     */
    public function count()
    {
      return count($this->FlightSupplement);
    }

}

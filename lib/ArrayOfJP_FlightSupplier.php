<?php

namespace Juniper\Webservice;

class ArrayOfJP_FlightSupplier implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_FlightSupplier[] $FlightSupplier
     */
    protected $FlightSupplier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_FlightSupplier[]
     */
    public function getFlightSupplier()
    {
      return $this->FlightSupplier;
    }

    /**
     * @param JP_FlightSupplier[] $FlightSupplier
     * @return ArrayOfJP_FlightSupplier
     */
    public function setFlightSupplier(array $FlightSupplier = null)
    {
      $this->FlightSupplier = $FlightSupplier;
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
      return isset($this->FlightSupplier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_FlightSupplier
     */
    public function offsetGet($offset)
    {
      return $this->FlightSupplier[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_FlightSupplier $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FlightSupplier[] = $value;
      } else {
        $this->FlightSupplier[$offset] = $value;
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
      unset($this->FlightSupplier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_FlightSupplier Return the current element
     */
    public function current()
    {
      return current($this->FlightSupplier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FlightSupplier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FlightSupplier);
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
      reset($this->FlightSupplier);
    }

    /**
     * Countable implementation
     *
     * @return JP_FlightSupplier Return count of elements
     */
    public function count()
    {
      return count($this->FlightSupplier);
    }

}

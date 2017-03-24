<?php

class ArrayOfJP_FlightRate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_FlightRate[] $FlightRate
     */
    protected $FlightRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_FlightRate[]
     */
    public function getFlightRate()
    {
      return $this->FlightRate;
    }

    /**
     * @param JP_FlightRate[] $FlightRate
     * @return ArrayOfJP_FlightRate
     */
    public function setFlightRate(array $FlightRate = null)
    {
      $this->FlightRate = $FlightRate;
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
      return isset($this->FlightRate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_FlightRate
     */
    public function offsetGet($offset)
    {
      return $this->FlightRate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_FlightRate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FlightRate[] = $value;
      } else {
        $this->FlightRate[$offset] = $value;
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
      unset($this->FlightRate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_FlightRate Return the current element
     */
    public function current()
    {
      return current($this->FlightRate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FlightRate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FlightRate);
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
      reset($this->FlightRate);
    }

    /**
     * Countable implementation
     *
     * @return JP_FlightRate Return count of elements
     */
    public function count()
    {
      return count($this->FlightRate);
    }

}

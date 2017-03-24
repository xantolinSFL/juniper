<?php

class ArrayOfJP_FlightElement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_FlightElement[] $FlightElement
     */
    protected $FlightElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_FlightElement[]
     */
    public function getFlightElement()
    {
      return $this->FlightElement;
    }

    /**
     * @param JP_FlightElement[] $FlightElement
     * @return ArrayOfJP_FlightElement
     */
    public function setFlightElement(array $FlightElement = null)
    {
      $this->FlightElement = $FlightElement;
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
      return isset($this->FlightElement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_FlightElement
     */
    public function offsetGet($offset)
    {
      return $this->FlightElement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_FlightElement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FlightElement[] = $value;
      } else {
        $this->FlightElement[$offset] = $value;
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
      unset($this->FlightElement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_FlightElement Return the current element
     */
    public function current()
    {
      return current($this->FlightElement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FlightElement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FlightElement);
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
      reset($this->FlightElement);
    }

    /**
     * Countable implementation
     *
     * @return JP_FlightElement Return count of elements
     */
    public function count()
    {
      return count($this->FlightElement);
    }

}

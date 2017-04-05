<?php

namespace Juniper\Webservice;

class ArrayOfJP_FlightRule implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_FlightRule[] $Rule
     */
    protected $Rule = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_FlightRule[]
     */
    public function getRule()
    {
      return $this->Rule;
    }

    /**
     * @param JP_FlightRule[] $Rule
     * @return ArrayOfJP_FlightRule
     */
    public function setRule(array $Rule = null)
    {
      $this->Rule = $Rule;
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
      return isset($this->Rule[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_FlightRule
     */
    public function offsetGet($offset)
    {
      return $this->Rule[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_FlightRule $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Rule[] = $value;
      } else {
        $this->Rule[$offset] = $value;
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
      unset($this->Rule[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_FlightRule Return the current element
     */
    public function current()
    {
      return current($this->Rule);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Rule);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Rule);
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
      reset($this->Rule);
    }

    /**
     * Countable implementation
     *
     * @return JP_FlightRule Return count of elements
     */
    public function count()
    {
      return count($this->Rule);
    }

}

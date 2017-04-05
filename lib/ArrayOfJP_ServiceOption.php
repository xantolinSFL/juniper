<?php

namespace Juniper\Webservice;

class ArrayOfJP_ServiceOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ServiceOption[] $ServiceOption
     */
    protected $ServiceOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ServiceOption[]
     */
    public function getServiceOption()
    {
      return $this->ServiceOption;
    }

    /**
     * @param JP_ServiceOption[] $ServiceOption
     * @return ArrayOfJP_ServiceOption
     */
    public function setServiceOption(array $ServiceOption = null)
    {
      $this->ServiceOption = $ServiceOption;
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
      return isset($this->ServiceOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ServiceOption
     */
    public function offsetGet($offset)
    {
      return $this->ServiceOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ServiceOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ServiceOption[] = $value;
      } else {
        $this->ServiceOption[$offset] = $value;
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
      unset($this->ServiceOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ServiceOption Return the current element
     */
    public function current()
    {
      return current($this->ServiceOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceOption);
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
      reset($this->ServiceOption);
    }

    /**
     * Countable implementation
     *
     * @return JP_ServiceOption Return count of elements
     */
    public function count()
    {
      return count($this->ServiceOption);
    }

}

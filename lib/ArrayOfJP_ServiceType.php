<?php

namespace Juniper\Webservice;

class ArrayOfJP_ServiceType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ServiceType[] $ServiceType
     */
    protected $ServiceType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ServiceType[]
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param JP_ServiceType[] $ServiceType
     * @return ArrayOfJP_ServiceType
     */
    public function setServiceType(array $ServiceType = null)
    {
      $this->ServiceType = $ServiceType;
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
      return isset($this->ServiceType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ServiceType
     */
    public function offsetGet($offset)
    {
      return $this->ServiceType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ServiceType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ServiceType[] = $value;
      } else {
        $this->ServiceType[$offset] = $value;
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
      unset($this->ServiceType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ServiceType Return the current element
     */
    public function current()
    {
      return current($this->ServiceType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceType);
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
      reset($this->ServiceType);
    }

    /**
     * Countable implementation
     *
     * @return JP_ServiceType Return count of elements
     */
    public function count()
    {
      return count($this->ServiceType);
    }

}

<?php

class ArrayOfJP_ServiceBookingInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ServiceBookingInfo[] $ServiceBookingInfo
     */
    protected $ServiceBookingInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ServiceBookingInfo[]
     */
    public function getServiceBookingInfo()
    {
      return $this->ServiceBookingInfo;
    }

    /**
     * @param JP_ServiceBookingInfo[] $ServiceBookingInfo
     * @return ArrayOfJP_ServiceBookingInfo
     */
    public function setServiceBookingInfo(array $ServiceBookingInfo = null)
    {
      $this->ServiceBookingInfo = $ServiceBookingInfo;
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
      return isset($this->ServiceBookingInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ServiceBookingInfo
     */
    public function offsetGet($offset)
    {
      return $this->ServiceBookingInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ServiceBookingInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ServiceBookingInfo[] = $value;
      } else {
        $this->ServiceBookingInfo[$offset] = $value;
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
      unset($this->ServiceBookingInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ServiceBookingInfo Return the current element
     */
    public function current()
    {
      return current($this->ServiceBookingInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceBookingInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceBookingInfo);
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
      reset($this->ServiceBookingInfo);
    }

    /**
     * Countable implementation
     *
     * @return JP_ServiceBookingInfo Return count of elements
     */
    public function count()
    {
      return count($this->ServiceBookingInfo);
    }

}

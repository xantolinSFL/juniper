<?php

namespace Juniper\Webservice;

class ArrayOfJPSOAP_PickUpPoint implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_PickUpPoint[] $PickUpPoint
     */
    protected $PickUpPoint = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_PickUpPoint[]
     */
    public function getPickUpPoint()
    {
      return $this->PickUpPoint;
    }

    /**
     * @param JPSOAP_PickUpPoint[] $PickUpPoint
     * @return ArrayOfJPSOAP_PickUpPoint
     */
    public function setPickUpPoint(array $PickUpPoint = null)
    {
      $this->PickUpPoint = $PickUpPoint;
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
      return isset($this->PickUpPoint[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_PickUpPoint
     */
    public function offsetGet($offset)
    {
      return $this->PickUpPoint[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_PickUpPoint $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PickUpPoint[] = $value;
      } else {
        $this->PickUpPoint[$offset] = $value;
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
      unset($this->PickUpPoint[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_PickUpPoint Return the current element
     */
    public function current()
    {
      return current($this->PickUpPoint);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PickUpPoint);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PickUpPoint);
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
      reset($this->PickUpPoint);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_PickUpPoint Return count of elements
     */
    public function count()
    {
      return count($this->PickUpPoint);
    }

}

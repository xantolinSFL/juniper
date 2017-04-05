<?php

namespace Juniper\Webservice;

class ArrayOfJPSOAP_hotelRatePlanCancellationPolicy implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_hotelRatePlanCancellationPolicy[] $CancellationPolicy
     */
    protected $CancellationPolicy = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_hotelRatePlanCancellationPolicy[]
     */
    public function getCancellationPolicy()
    {
      return $this->CancellationPolicy;
    }

    /**
     * @param JPSOAP_hotelRatePlanCancellationPolicy[] $CancellationPolicy
     * @return ArrayOfJPSOAP_hotelRatePlanCancellationPolicy
     */
    public function setCancellationPolicy(array $CancellationPolicy = null)
    {
      $this->CancellationPolicy = $CancellationPolicy;
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
      return isset($this->CancellationPolicy[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_hotelRatePlanCancellationPolicy
     */
    public function offsetGet($offset)
    {
      return $this->CancellationPolicy[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_hotelRatePlanCancellationPolicy $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CancellationPolicy[] = $value;
      } else {
        $this->CancellationPolicy[$offset] = $value;
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
      unset($this->CancellationPolicy[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_hotelRatePlanCancellationPolicy Return the current element
     */
    public function current()
    {
      return current($this->CancellationPolicy);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CancellationPolicy);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CancellationPolicy);
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
      reset($this->CancellationPolicy);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_hotelRatePlanCancellationPolicy Return count of elements
     */
    public function count()
    {
      return count($this->CancellationPolicy);
    }

}

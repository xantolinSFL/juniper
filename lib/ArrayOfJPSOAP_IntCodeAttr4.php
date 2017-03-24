<?php

class ArrayOfJPSOAP_IntCodeAttr4 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_IntCodeAttr[] $Offer
     */
    protected $Offer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_IntCodeAttr[]
     */
    public function getOffer()
    {
      return $this->Offer;
    }

    /**
     * @param JPSOAP_IntCodeAttr[] $Offer
     * @return ArrayOfJPSOAP_IntCodeAttr4
     */
    public function setOffer(array $Offer = null)
    {
      $this->Offer = $Offer;
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
      return isset($this->Offer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_IntCodeAttr
     */
    public function offsetGet($offset)
    {
      return $this->Offer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_IntCodeAttr $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Offer[] = $value;
      } else {
        $this->Offer[$offset] = $value;
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
      unset($this->Offer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_IntCodeAttr Return the current element
     */
    public function current()
    {
      return current($this->Offer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Offer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Offer);
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
      reset($this->Offer);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_IntCodeAttr Return count of elements
     */
    public function count()
    {
      return count($this->Offer);
    }

}

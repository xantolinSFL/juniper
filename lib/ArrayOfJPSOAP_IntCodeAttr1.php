<?php

namespace Juniper\Webservice;

class ArrayOfJPSOAP_IntCodeAttr1 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_IntCodeAttr[] $Supplement
     */
    protected $Supplement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_IntCodeAttr[]
     */
    public function getSupplement()
    {
      return $this->Supplement;
    }

    /**
     * @param JPSOAP_IntCodeAttr[] $Supplement
     * @return ArrayOfJPSOAP_IntCodeAttr1
     */
    public function setSupplement(array $Supplement = null)
    {
      $this->Supplement = $Supplement;
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
      return isset($this->Supplement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_IntCodeAttr
     */
    public function offsetGet($offset)
    {
      return $this->Supplement[$offset];
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
        $this->Supplement[] = $value;
      } else {
        $this->Supplement[$offset] = $value;
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
      unset($this->Supplement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_IntCodeAttr Return the current element
     */
    public function current()
    {
      return current($this->Supplement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Supplement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Supplement);
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
      reset($this->Supplement);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_IntCodeAttr Return count of elements
     */
    public function count()
    {
      return count($this->Supplement);
    }

}

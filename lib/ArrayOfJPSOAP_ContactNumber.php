<?php

namespace Juniper\Webservice;

class ArrayOfJPSOAP_ContactNumber implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_ContactNumber[] $PhoneNumber
     */
    protected $PhoneNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_ContactNumber[]
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param JPSOAP_ContactNumber[] $PhoneNumber
     * @return ArrayOfJPSOAP_ContactNumber
     */
    public function setPhoneNumber(array $PhoneNumber = null)
    {
      $this->PhoneNumber = $PhoneNumber;
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
      return isset($this->PhoneNumber[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_ContactNumber
     */
    public function offsetGet($offset)
    {
      return $this->PhoneNumber[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_ContactNumber $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PhoneNumber[] = $value;
      } else {
        $this->PhoneNumber[$offset] = $value;
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
      unset($this->PhoneNumber[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_ContactNumber Return the current element
     */
    public function current()
    {
      return current($this->PhoneNumber);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PhoneNumber);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PhoneNumber);
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
      reset($this->PhoneNumber);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_ContactNumber Return count of elements
     */
    public function count()
    {
      return count($this->PhoneNumber);
    }

}

<?php

namespace Juniper\Webservice;

class ArrayOfJPSOAP_Discount implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_Discount[] $AdultAdditional
     */
    protected $AdultAdditional = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_Discount[]
     */
    public function getAdultAdditional()
    {
      return $this->AdultAdditional;
    }

    /**
     * @param JPSOAP_Discount[] $AdultAdditional
     * @return ArrayOfJPSOAP_Discount
     */
    public function setAdultAdditional(array $AdultAdditional = null)
    {
      $this->AdultAdditional = $AdultAdditional;
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
      return isset($this->AdultAdditional[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_Discount
     */
    public function offsetGet($offset)
    {
      return $this->AdultAdditional[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_Discount $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AdultAdditional[] = $value;
      } else {
        $this->AdultAdditional[$offset] = $value;
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
      unset($this->AdultAdditional[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_Discount Return the current element
     */
    public function current()
    {
      return current($this->AdultAdditional);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AdultAdditional);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AdultAdditional);
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
      reset($this->AdultAdditional);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_Discount Return count of elements
     */
    public function count()
    {
      return count($this->AdultAdditional);
    }

}

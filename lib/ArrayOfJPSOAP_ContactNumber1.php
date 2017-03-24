<?php

class ArrayOfJPSOAP_ContactNumber1 implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_ContactNumber[] $Fax
     */
    protected $Fax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_ContactNumber[]
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param JPSOAP_ContactNumber[] $Fax
     * @return ArrayOfJPSOAP_ContactNumber1
     */
    public function setFax(array $Fax = null)
    {
      $this->Fax = $Fax;
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
      return isset($this->Fax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_ContactNumber
     */
    public function offsetGet($offset)
    {
      return $this->Fax[$offset];
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
        $this->Fax[] = $value;
      } else {
        $this->Fax[$offset] = $value;
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
      unset($this->Fax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_ContactNumber Return the current element
     */
    public function current()
    {
      return current($this->Fax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Fax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Fax);
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
      reset($this->Fax);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_ContactNumber Return count of elements
     */
    public function count()
    {
      return count($this->Fax);
    }

}

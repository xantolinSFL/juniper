<?php

class ArrayOfJP_PhoneNumber implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PhoneNumber[] $PhoneNumber
     */
    protected $PhoneNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PhoneNumber[]
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param JP_PhoneNumber[] $PhoneNumber
     * @return ArrayOfJP_PhoneNumber
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
     * @return JP_PhoneNumber
     */
    public function offsetGet($offset)
    {
      return $this->PhoneNumber[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PhoneNumber $value The value to set
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
     * @return JP_PhoneNumber Return the current element
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
     * @return JP_PhoneNumber Return count of elements
     */
    public function count()
    {
      return count($this->PhoneNumber);
    }

}

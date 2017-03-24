<?php

class ArrayOfJP_PackageInsurance implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PackageInsurance[] $Insurance
     */
    protected $Insurance = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageInsurance[]
     */
    public function getInsurance()
    {
      return $this->Insurance;
    }

    /**
     * @param JP_PackageInsurance[] $Insurance
     * @return ArrayOfJP_PackageInsurance
     */
    public function setInsurance(array $Insurance = null)
    {
      $this->Insurance = $Insurance;
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
      return isset($this->Insurance[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_PackageInsurance
     */
    public function offsetGet($offset)
    {
      return $this->Insurance[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PackageInsurance $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Insurance[] = $value;
      } else {
        $this->Insurance[$offset] = $value;
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
      unset($this->Insurance[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_PackageInsurance Return the current element
     */
    public function current()
    {
      return current($this->Insurance);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Insurance);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Insurance);
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
      reset($this->Insurance);
    }

    /**
     * Countable implementation
     *
     * @return JP_PackageInsurance Return count of elements
     */
    public function count()
    {
      return count($this->Insurance);
    }

}

<?php

class ArrayOfJP_CruiseSupplement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruiseSupplement[] $CruiseSupplement
     */
    protected $CruiseSupplement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruiseSupplement[]
     */
    public function getCruiseSupplement()
    {
      return $this->CruiseSupplement;
    }

    /**
     * @param JP_CruiseSupplement[] $CruiseSupplement
     * @return ArrayOfJP_CruiseSupplement
     */
    public function setCruiseSupplement(array $CruiseSupplement = null)
    {
      $this->CruiseSupplement = $CruiseSupplement;
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
      return isset($this->CruiseSupplement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruiseSupplement
     */
    public function offsetGet($offset)
    {
      return $this->CruiseSupplement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruiseSupplement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CruiseSupplement[] = $value;
      } else {
        $this->CruiseSupplement[$offset] = $value;
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
      unset($this->CruiseSupplement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruiseSupplement Return the current element
     */
    public function current()
    {
      return current($this->CruiseSupplement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CruiseSupplement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CruiseSupplement);
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
      reset($this->CruiseSupplement);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruiseSupplement Return count of elements
     */
    public function count()
    {
      return count($this->CruiseSupplement);
    }

}

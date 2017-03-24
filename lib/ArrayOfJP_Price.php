<?php

class ArrayOfJP_Price implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Price[] $Price
     */
    protected $Price = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Price[]
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param JP_Price[] $Price
     * @return ArrayOfJP_Price
     */
    public function setPrice(array $Price = null)
    {
      $this->Price = $Price;
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
      return isset($this->Price[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Price
     */
    public function offsetGet($offset)
    {
      return $this->Price[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Price $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Price[] = $value;
      } else {
        $this->Price[$offset] = $value;
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
      unset($this->Price[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Price Return the current element
     */
    public function current()
    {
      return current($this->Price);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Price);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Price);
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
      reset($this->Price);
    }

    /**
     * Countable implementation
     *
     * @return JP_Price Return count of elements
     */
    public function count()
    {
      return count($this->Price);
    }

}

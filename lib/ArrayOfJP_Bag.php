<?php

namespace Juniper\Webservice;

class ArrayOfJP_Bag implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Bag[] $Bag
     */
    protected $Bag = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Bag[]
     */
    public function getBag()
    {
      return $this->Bag;
    }

    /**
     * @param JP_Bag[] $Bag
     * @return ArrayOfJP_Bag
     */
    public function setBag(array $Bag = null)
    {
      $this->Bag = $Bag;
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
      return isset($this->Bag[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Bag
     */
    public function offsetGet($offset)
    {
      return $this->Bag[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Bag $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Bag[] = $value;
      } else {
        $this->Bag[$offset] = $value;
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
      unset($this->Bag[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Bag Return the current element
     */
    public function current()
    {
      return current($this->Bag);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Bag);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Bag);
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
      reset($this->Bag);
    }

    /**
     * Countable implementation
     *
     * @return JP_Bag Return count of elements
     */
    public function count()
    {
      return count($this->Bag);
    }

}

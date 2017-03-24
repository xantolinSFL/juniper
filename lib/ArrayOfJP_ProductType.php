<?php

class ArrayOfJP_ProductType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ProductType[] $ProductType
     */
    protected $ProductType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ProductType[]
     */
    public function getProductType()
    {
      return $this->ProductType;
    }

    /**
     * @param JP_ProductType[] $ProductType
     * @return ArrayOfJP_ProductType
     */
    public function setProductType(array $ProductType = null)
    {
      $this->ProductType = $ProductType;
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
      return isset($this->ProductType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ProductType
     */
    public function offsetGet($offset)
    {
      return $this->ProductType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ProductType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProductType[] = $value;
      } else {
        $this->ProductType[$offset] = $value;
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
      unset($this->ProductType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ProductType Return the current element
     */
    public function current()
    {
      return current($this->ProductType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductType);
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
      reset($this->ProductType);
    }

    /**
     * Countable implementation
     *
     * @return JP_ProductType Return count of elements
     */
    public function count()
    {
      return count($this->ProductType);
    }

}

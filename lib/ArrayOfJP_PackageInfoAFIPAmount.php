<?php

namespace Juniper\Webservice;

class ArrayOfJP_PackageInfoAFIPAmount implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PackageInfoAFIPAmount[] $AFIPAmount
     */
    protected $AFIPAmount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageInfoAFIPAmount[]
     */
    public function getAFIPAmount()
    {
      return $this->AFIPAmount;
    }

    /**
     * @param JP_PackageInfoAFIPAmount[] $AFIPAmount
     * @return ArrayOfJP_PackageInfoAFIPAmount
     */
    public function setAFIPAmount(array $AFIPAmount = null)
    {
      $this->AFIPAmount = $AFIPAmount;
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
      return isset($this->AFIPAmount[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_PackageInfoAFIPAmount
     */
    public function offsetGet($offset)
    {
      return $this->AFIPAmount[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PackageInfoAFIPAmount $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AFIPAmount[] = $value;
      } else {
        $this->AFIPAmount[$offset] = $value;
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
      unset($this->AFIPAmount[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_PackageInfoAFIPAmount Return the current element
     */
    public function current()
    {
      return current($this->AFIPAmount);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AFIPAmount);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AFIPAmount);
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
      reset($this->AFIPAmount);
    }

    /**
     * Countable implementation
     *
     * @return JP_PackageInfoAFIPAmount Return count of elements
     */
    public function count()
    {
      return count($this->AFIPAmount);
    }

}

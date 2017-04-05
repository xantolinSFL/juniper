<?php

namespace Juniper\Webservice;

class ArrayOfJP_PackageStay implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PackageStay[] $Stay
     */
    protected $Stay = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageStay[]
     */
    public function getStay()
    {
      return $this->Stay;
    }

    /**
     * @param JP_PackageStay[] $Stay
     * @return ArrayOfJP_PackageStay
     */
    public function setStay(array $Stay = null)
    {
      $this->Stay = $Stay;
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
      return isset($this->Stay[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_PackageStay
     */
    public function offsetGet($offset)
    {
      return $this->Stay[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PackageStay $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Stay[] = $value;
      } else {
        $this->Stay[$offset] = $value;
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
      unset($this->Stay[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_PackageStay Return the current element
     */
    public function current()
    {
      return current($this->Stay);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Stay);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Stay);
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
      reset($this->Stay);
    }

    /**
     * Countable implementation
     *
     * @return JP_PackageStay Return count of elements
     */
    public function count()
    {
      return count($this->Stay);
    }

}

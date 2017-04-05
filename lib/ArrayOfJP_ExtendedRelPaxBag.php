<?php

namespace Juniper\Webservice;

class ArrayOfJP_ExtendedRelPaxBag implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_ExtendedRelPaxBag[] $RelPax
     */
    protected $RelPax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_ExtendedRelPaxBag[]
     */
    public function getRelPax()
    {
      return $this->RelPax;
    }

    /**
     * @param JP_ExtendedRelPaxBag[] $RelPax
     * @return ArrayOfJP_ExtendedRelPaxBag
     */
    public function setRelPax(array $RelPax = null)
    {
      $this->RelPax = $RelPax;
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
      return isset($this->RelPax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_ExtendedRelPaxBag
     */
    public function offsetGet($offset)
    {
      return $this->RelPax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_ExtendedRelPaxBag $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RelPax[] = $value;
      } else {
        $this->RelPax[$offset] = $value;
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
      unset($this->RelPax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_ExtendedRelPaxBag Return the current element
     */
    public function current()
    {
      return current($this->RelPax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RelPax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RelPax);
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
      reset($this->RelPax);
    }

    /**
     * Countable implementation
     *
     * @return JP_ExtendedRelPaxBag Return count of elements
     */
    public function count()
    {
      return count($this->RelPax);
    }

}

<?php

namespace Juniper\Webservice;

class ArrayOfJP_GroupFee implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_GroupFee[] $GroupFee
     */
    protected $GroupFee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_GroupFee[]
     */
    public function getGroupFee()
    {
      return $this->GroupFee;
    }

    /**
     * @param JP_GroupFee[] $GroupFee
     * @return ArrayOfJP_GroupFee
     */
    public function setGroupFee(array $GroupFee = null)
    {
      $this->GroupFee = $GroupFee;
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
      return isset($this->GroupFee[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_GroupFee
     */
    public function offsetGet($offset)
    {
      return $this->GroupFee[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_GroupFee $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->GroupFee[] = $value;
      } else {
        $this->GroupFee[$offset] = $value;
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
      unset($this->GroupFee[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_GroupFee Return the current element
     */
    public function current()
    {
      return current($this->GroupFee);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GroupFee);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GroupFee);
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
      reset($this->GroupFee);
    }

    /**
     * Countable implementation
     *
     * @return JP_GroupFee Return count of elements
     */
    public function count()
    {
      return count($this->GroupFee);
    }

}

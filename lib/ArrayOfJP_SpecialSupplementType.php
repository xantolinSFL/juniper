<?php

namespace Juniper\Webservice;

class ArrayOfJP_SpecialSupplementType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_SpecialSupplementType[] $SpecialSupplementType
     */
    protected $SpecialSupplementType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_SpecialSupplementType[]
     */
    public function getSpecialSupplementType()
    {
      return $this->SpecialSupplementType;
    }

    /**
     * @param JP_SpecialSupplementType[] $SpecialSupplementType
     * @return ArrayOfJP_SpecialSupplementType
     */
    public function setSpecialSupplementType(array $SpecialSupplementType = null)
    {
      $this->SpecialSupplementType = $SpecialSupplementType;
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
      return isset($this->SpecialSupplementType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_SpecialSupplementType
     */
    public function offsetGet($offset)
    {
      return $this->SpecialSupplementType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_SpecialSupplementType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SpecialSupplementType[] = $value;
      } else {
        $this->SpecialSupplementType[$offset] = $value;
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
      unset($this->SpecialSupplementType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_SpecialSupplementType Return the current element
     */
    public function current()
    {
      return current($this->SpecialSupplementType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SpecialSupplementType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SpecialSupplementType);
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
      reset($this->SpecialSupplementType);
    }

    /**
     * Countable implementation
     *
     * @return JP_SpecialSupplementType Return count of elements
     */
    public function count()
    {
      return count($this->SpecialSupplementType);
    }

}

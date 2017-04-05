<?php

namespace Juniper\Webservice;

class ArrayOfJP_RequiredFieldValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_RequiredFieldValue[] $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RequiredFieldValue[]
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param JP_RequiredFieldValue[] $Value
     * @return ArrayOfJP_RequiredFieldValue
     */
    public function setValue(array $Value = null)
    {
      $this->Value = $Value;
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
      return isset($this->Value[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_RequiredFieldValue
     */
    public function offsetGet($offset)
    {
      return $this->Value[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_RequiredFieldValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Value[] = $value;
      } else {
        $this->Value[$offset] = $value;
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
      unset($this->Value[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_RequiredFieldValue Return the current element
     */
    public function current()
    {
      return current($this->Value);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Value);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Value);
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
      reset($this->Value);
    }

    /**
     * Countable implementation
     *
     * @return JP_RequiredFieldValue Return count of elements
     */
    public function count()
    {
      return count($this->Value);
    }

}

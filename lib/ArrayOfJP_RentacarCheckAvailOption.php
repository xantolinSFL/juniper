<?php

namespace Juniper\Webservice;

class ArrayOfJP_RentacarCheckAvailOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_RentacarCheckAvailOption[] $RentacarOption
     */
    protected $RentacarOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RentacarCheckAvailOption[]
     */
    public function getRentacarOption()
    {
      return $this->RentacarOption;
    }

    /**
     * @param JP_RentacarCheckAvailOption[] $RentacarOption
     * @return ArrayOfJP_RentacarCheckAvailOption
     */
    public function setRentacarOption(array $RentacarOption = null)
    {
      $this->RentacarOption = $RentacarOption;
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
      return isset($this->RentacarOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_RentacarCheckAvailOption
     */
    public function offsetGet($offset)
    {
      return $this->RentacarOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_RentacarCheckAvailOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RentacarOption[] = $value;
      } else {
        $this->RentacarOption[$offset] = $value;
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
      unset($this->RentacarOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_RentacarCheckAvailOption Return the current element
     */
    public function current()
    {
      return current($this->RentacarOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RentacarOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RentacarOption);
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
      reset($this->RentacarOption);
    }

    /**
     * Countable implementation
     *
     * @return JP_RentacarCheckAvailOption Return count of elements
     */
    public function count()
    {
      return count($this->RentacarOption);
    }

}

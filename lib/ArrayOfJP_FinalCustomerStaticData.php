<?php

class ArrayOfJP_FinalCustomerStaticData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_FinalCustomerStaticData[] $FinalCustomer
     */
    protected $FinalCustomer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_FinalCustomerStaticData[]
     */
    public function getFinalCustomer()
    {
      return $this->FinalCustomer;
    }

    /**
     * @param JP_FinalCustomerStaticData[] $FinalCustomer
     * @return ArrayOfJP_FinalCustomerStaticData
     */
    public function setFinalCustomer(array $FinalCustomer = null)
    {
      $this->FinalCustomer = $FinalCustomer;
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
      return isset($this->FinalCustomer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_FinalCustomerStaticData
     */
    public function offsetGet($offset)
    {
      return $this->FinalCustomer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_FinalCustomerStaticData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FinalCustomer[] = $value;
      } else {
        $this->FinalCustomer[$offset] = $value;
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
      unset($this->FinalCustomer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_FinalCustomerStaticData Return the current element
     */
    public function current()
    {
      return current($this->FinalCustomer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FinalCustomer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FinalCustomer);
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
      reset($this->FinalCustomer);
    }

    /**
     * Countable implementation
     *
     * @return JP_FinalCustomerStaticData Return count of elements
     */
    public function count()
    {
      return count($this->FinalCustomer);
    }

}

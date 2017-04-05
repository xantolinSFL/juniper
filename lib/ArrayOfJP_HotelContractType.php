<?php

namespace Juniper\Webservice;

class ArrayOfJP_HotelContractType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_HotelContractType[] $ContractType
     */
    protected $ContractType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_HotelContractType[]
     */
    public function getContractType()
    {
      return $this->ContractType;
    }

    /**
     * @param JP_HotelContractType[] $ContractType
     * @return ArrayOfJP_HotelContractType
     */
    public function setContractType(array $ContractType = null)
    {
      $this->ContractType = $ContractType;
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
      return isset($this->ContractType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_HotelContractType
     */
    public function offsetGet($offset)
    {
      return $this->ContractType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_HotelContractType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContractType[] = $value;
      } else {
        $this->ContractType[$offset] = $value;
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
      unset($this->ContractType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_HotelContractType Return the current element
     */
    public function current()
    {
      return current($this->ContractType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContractType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContractType);
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
      reset($this->ContractType);
    }

    /**
     * Countable implementation
     *
     * @return JP_HotelContractType Return count of elements
     */
    public function count()
    {
      return count($this->ContractType);
    }

}

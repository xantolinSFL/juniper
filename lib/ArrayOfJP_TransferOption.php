<?php

namespace Juniper\Webservice;

class ArrayOfJP_TransferOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_TransferOption[] $TransferOption
     */
    protected $TransferOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_TransferOption[]
     */
    public function getTransferOption()
    {
      return $this->TransferOption;
    }

    /**
     * @param JP_TransferOption[] $TransferOption
     * @return ArrayOfJP_TransferOption
     */
    public function setTransferOption(array $TransferOption = null)
    {
      $this->TransferOption = $TransferOption;
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
      return isset($this->TransferOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_TransferOption
     */
    public function offsetGet($offset)
    {
      return $this->TransferOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_TransferOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TransferOption[] = $value;
      } else {
        $this->TransferOption[$offset] = $value;
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
      unset($this->TransferOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_TransferOption Return the current element
     */
    public function current()
    {
      return current($this->TransferOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TransferOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TransferOption);
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
      reset($this->TransferOption);
    }

    /**
     * Countable implementation
     *
     * @return JP_TransferOption Return count of elements
     */
    public function count()
    {
      return count($this->TransferOption);
    }

}

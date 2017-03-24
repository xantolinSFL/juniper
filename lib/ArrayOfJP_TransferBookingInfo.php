<?php

class ArrayOfJP_TransferBookingInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_TransferBookingInfo[] $TransferBookingInfo
     */
    protected $TransferBookingInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_TransferBookingInfo[]
     */
    public function getTransferBookingInfo()
    {
      return $this->TransferBookingInfo;
    }

    /**
     * @param JP_TransferBookingInfo[] $TransferBookingInfo
     * @return ArrayOfJP_TransferBookingInfo
     */
    public function setTransferBookingInfo(array $TransferBookingInfo = null)
    {
      $this->TransferBookingInfo = $TransferBookingInfo;
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
      return isset($this->TransferBookingInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_TransferBookingInfo
     */
    public function offsetGet($offset)
    {
      return $this->TransferBookingInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_TransferBookingInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TransferBookingInfo[] = $value;
      } else {
        $this->TransferBookingInfo[$offset] = $value;
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
      unset($this->TransferBookingInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_TransferBookingInfo Return the current element
     */
    public function current()
    {
      return current($this->TransferBookingInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TransferBookingInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TransferBookingInfo);
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
      reset($this->TransferBookingInfo);
    }

    /**
     * Countable implementation
     *
     * @return JP_TransferBookingInfo Return count of elements
     */
    public function count()
    {
      return count($this->TransferBookingInfo);
    }

}

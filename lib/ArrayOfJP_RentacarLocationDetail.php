<?php

class ArrayOfJP_RentacarLocationDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_RentacarLocationDetail[] $RentacarLocationDetail
     */
    protected $RentacarLocationDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_RentacarLocationDetail[]
     */
    public function getRentacarLocationDetail()
    {
      return $this->RentacarLocationDetail;
    }

    /**
     * @param JP_RentacarLocationDetail[] $RentacarLocationDetail
     * @return ArrayOfJP_RentacarLocationDetail
     */
    public function setRentacarLocationDetail(array $RentacarLocationDetail = null)
    {
      $this->RentacarLocationDetail = $RentacarLocationDetail;
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
      return isset($this->RentacarLocationDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_RentacarLocationDetail
     */
    public function offsetGet($offset)
    {
      return $this->RentacarLocationDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_RentacarLocationDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RentacarLocationDetail[] = $value;
      } else {
        $this->RentacarLocationDetail[$offset] = $value;
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
      unset($this->RentacarLocationDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_RentacarLocationDetail Return the current element
     */
    public function current()
    {
      return current($this->RentacarLocationDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RentacarLocationDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RentacarLocationDetail);
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
      reset($this->RentacarLocationDetail);
    }

    /**
     * Countable implementation
     *
     * @return JP_RentacarLocationDetail Return count of elements
     */
    public function count()
    {
      return count($this->RentacarLocationDetail);
    }

}

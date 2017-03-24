<?php

class ArrayOfJP_WarningDate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_WarningDate[] $Date
     */
    protected $Date = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_WarningDate[]
     */
    public function getDate()
    {
      return $this->Date;
    }

    /**
     * @param JP_WarningDate[] $Date
     * @return ArrayOfJP_WarningDate
     */
    public function setDate(array $Date = null)
    {
      $this->Date = $Date;
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
      return isset($this->Date[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_WarningDate
     */
    public function offsetGet($offset)
    {
      return $this->Date[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_WarningDate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Date[] = $value;
      } else {
        $this->Date[$offset] = $value;
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
      unset($this->Date[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_WarningDate Return the current element
     */
    public function current()
    {
      return current($this->Date);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Date);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Date);
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
      reset($this->Date);
    }

    /**
     * Countable implementation
     *
     * @return JP_WarningDate Return count of elements
     */
    public function count()
    {
      return count($this->Date);
    }

}

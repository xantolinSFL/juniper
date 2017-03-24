<?php

class ArrayOfJP_TechnicalStop implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_TechnicalStop[] $TechnicalStop
     */
    protected $TechnicalStop = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_TechnicalStop[]
     */
    public function getTechnicalStop()
    {
      return $this->TechnicalStop;
    }

    /**
     * @param JP_TechnicalStop[] $TechnicalStop
     * @return ArrayOfJP_TechnicalStop
     */
    public function setTechnicalStop(array $TechnicalStop = null)
    {
      $this->TechnicalStop = $TechnicalStop;
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
      return isset($this->TechnicalStop[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_TechnicalStop
     */
    public function offsetGet($offset)
    {
      return $this->TechnicalStop[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_TechnicalStop $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TechnicalStop[] = $value;
      } else {
        $this->TechnicalStop[$offset] = $value;
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
      unset($this->TechnicalStop[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_TechnicalStop Return the current element
     */
    public function current()
    {
      return current($this->TechnicalStop);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TechnicalStop);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TechnicalStop);
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
      reset($this->TechnicalStop);
    }

    /**
     * Countable implementation
     *
     * @return JP_TechnicalStop Return count of elements
     */
    public function count()
    {
      return count($this->TechnicalStop);
    }

}

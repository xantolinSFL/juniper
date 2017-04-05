<?php

namespace Juniper\Webservice;

class ArrayOfJP_Board implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Board[] $Board
     */
    protected $Board = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Board[]
     */
    public function getBoard()
    {
      return $this->Board;
    }

    /**
     * @param JP_Board[] $Board
     * @return ArrayOfJP_Board
     */
    public function setBoard(array $Board = null)
    {
      $this->Board = $Board;
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
      return isset($this->Board[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Board
     */
    public function offsetGet($offset)
    {
      return $this->Board[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Board $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Board[] = $value;
      } else {
        $this->Board[$offset] = $value;
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
      unset($this->Board[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Board Return the current element
     */
    public function current()
    {
      return current($this->Board);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Board);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Board);
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
      reset($this->Board);
    }

    /**
     * Countable implementation
     *
     * @return JP_Board Return count of elements
     */
    public function count()
    {
      return count($this->Board);
    }

}

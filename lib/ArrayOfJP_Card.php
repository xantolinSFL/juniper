<?php

class ArrayOfJP_Card implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_Card[] $Card
     */
    protected $Card = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_Card[]
     */
    public function getCard()
    {
      return $this->Card;
    }

    /**
     * @param JP_Card[] $Card
     * @return ArrayOfJP_Card
     */
    public function setCard(array $Card = null)
    {
      $this->Card = $Card;
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
      return isset($this->Card[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_Card
     */
    public function offsetGet($offset)
    {
      return $this->Card[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_Card $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Card[] = $value;
      } else {
        $this->Card[$offset] = $value;
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
      unset($this->Card[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_Card Return the current element
     */
    public function current()
    {
      return current($this->Card);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Card);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Card);
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
      reset($this->Card);
    }

    /**
     * Countable implementation
     *
     * @return JP_Card Return count of elements
     */
    public function count()
    {
      return count($this->Card);
    }

}

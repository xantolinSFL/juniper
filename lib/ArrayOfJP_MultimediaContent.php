<?php

class ArrayOfJP_MultimediaContent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_MultimediaContent[] $MultimediaContent
     */
    protected $MultimediaContent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_MultimediaContent[]
     */
    public function getMultimediaContent()
    {
      return $this->MultimediaContent;
    }

    /**
     * @param JP_MultimediaContent[] $MultimediaContent
     * @return ArrayOfJP_MultimediaContent
     */
    public function setMultimediaContent(array $MultimediaContent = null)
    {
      $this->MultimediaContent = $MultimediaContent;
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
      return isset($this->MultimediaContent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_MultimediaContent
     */
    public function offsetGet($offset)
    {
      return $this->MultimediaContent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_MultimediaContent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MultimediaContent[] = $value;
      } else {
        $this->MultimediaContent[$offset] = $value;
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
      unset($this->MultimediaContent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_MultimediaContent Return the current element
     */
    public function current()
    {
      return current($this->MultimediaContent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MultimediaContent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MultimediaContent);
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
      reset($this->MultimediaContent);
    }

    /**
     * Countable implementation
     *
     * @return JP_MultimediaContent Return count of elements
     */
    public function count()
    {
      return count($this->MultimediaContent);
    }

}

<?php

class ArrayOfJPSOAP_Image implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_Image[] $Images
     */
    protected $Images = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_Image[]
     */
    public function getImages()
    {
      return $this->Images;
    }

    /**
     * @param JPSOAP_Image[] $Images
     * @return ArrayOfJPSOAP_Image
     */
    public function setImages(array $Images = null)
    {
      $this->Images = $Images;
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
      return isset($this->Images[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_Image
     */
    public function offsetGet($offset)
    {
      return $this->Images[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_Image $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Images[] = $value;
      } else {
        $this->Images[$offset] = $value;
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
      unset($this->Images[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_Image Return the current element
     */
    public function current()
    {
      return current($this->Images);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Images);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Images);
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
      reset($this->Images);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_Image Return count of elements
     */
    public function count()
    {
      return count($this->Images);
    }

}

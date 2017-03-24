<?php

class ArrayOfJPSOAP_IntCodeAttr implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JPSOAP_IntCodeAttr[] $SupplementCategory
     */
    protected $SupplementCategory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JPSOAP_IntCodeAttr[]
     */
    public function getSupplementCategory()
    {
      return $this->SupplementCategory;
    }

    /**
     * @param JPSOAP_IntCodeAttr[] $SupplementCategory
     * @return ArrayOfJPSOAP_IntCodeAttr
     */
    public function setSupplementCategory(array $SupplementCategory = null)
    {
      $this->SupplementCategory = $SupplementCategory;
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
      return isset($this->SupplementCategory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JPSOAP_IntCodeAttr
     */
    public function offsetGet($offset)
    {
      return $this->SupplementCategory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JPSOAP_IntCodeAttr $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SupplementCategory[] = $value;
      } else {
        $this->SupplementCategory[$offset] = $value;
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
      unset($this->SupplementCategory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JPSOAP_IntCodeAttr Return the current element
     */
    public function current()
    {
      return current($this->SupplementCategory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SupplementCategory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SupplementCategory);
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
      reset($this->SupplementCategory);
    }

    /**
     * Countable implementation
     *
     * @return JPSOAP_IntCodeAttr Return count of elements
     */
    public function count()
    {
      return count($this->SupplementCategory);
    }

}

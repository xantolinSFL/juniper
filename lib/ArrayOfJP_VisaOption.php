<?php

namespace Juniper\Webservice;

class ArrayOfJP_VisaOption implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_VisaOption[] $VisaOption
     */
    protected $VisaOption = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_VisaOption[]
     */
    public function getVisaOption()
    {
      return $this->VisaOption;
    }

    /**
     * @param JP_VisaOption[] $VisaOption
     * @return ArrayOfJP_VisaOption
     */
    public function setVisaOption(array $VisaOption = null)
    {
      $this->VisaOption = $VisaOption;
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
      return isset($this->VisaOption[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_VisaOption
     */
    public function offsetGet($offset)
    {
      return $this->VisaOption[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_VisaOption $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->VisaOption[] = $value;
      } else {
        $this->VisaOption[$offset] = $value;
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
      unset($this->VisaOption[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_VisaOption Return the current element
     */
    public function current()
    {
      return current($this->VisaOption);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VisaOption);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VisaOption);
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
      reset($this->VisaOption);
    }

    /**
     * Countable implementation
     *
     * @return JP_VisaOption Return count of elements
     */
    public function count()
    {
      return count($this->VisaOption);
    }

}

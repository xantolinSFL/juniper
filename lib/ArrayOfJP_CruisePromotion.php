<?php

namespace Juniper\Webservice;

class ArrayOfJP_CruisePromotion implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CruisePromotion[] $Promotion
     */
    protected $Promotion = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CruisePromotion[]
     */
    public function getPromotion()
    {
      return $this->Promotion;
    }

    /**
     * @param JP_CruisePromotion[] $Promotion
     * @return ArrayOfJP_CruisePromotion
     */
    public function setPromotion(array $Promotion = null)
    {
      $this->Promotion = $Promotion;
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
      return isset($this->Promotion[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CruisePromotion
     */
    public function offsetGet($offset)
    {
      return $this->Promotion[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CruisePromotion $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Promotion[] = $value;
      } else {
        $this->Promotion[$offset] = $value;
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
      unset($this->Promotion[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CruisePromotion Return the current element
     */
    public function current()
    {
      return current($this->Promotion);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Promotion);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Promotion);
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
      reset($this->Promotion);
    }

    /**
     * Countable implementation
     *
     * @return JP_CruisePromotion Return count of elements
     */
    public function count()
    {
      return count($this->Promotion);
    }

}

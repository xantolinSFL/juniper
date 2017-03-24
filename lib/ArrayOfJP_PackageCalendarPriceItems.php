<?php

class ArrayOfJP_PackageCalendarPriceItems implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_PackageCalendarPriceItems[] $PackageCalendarPriceItems
     */
    protected $PackageCalendarPriceItems = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_PackageCalendarPriceItems[]
     */
    public function getPackageCalendarPriceItems()
    {
      return $this->PackageCalendarPriceItems;
    }

    /**
     * @param JP_PackageCalendarPriceItems[] $PackageCalendarPriceItems
     * @return ArrayOfJP_PackageCalendarPriceItems
     */
    public function setPackageCalendarPriceItems(array $PackageCalendarPriceItems = null)
    {
      $this->PackageCalendarPriceItems = $PackageCalendarPriceItems;
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
      return isset($this->PackageCalendarPriceItems[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_PackageCalendarPriceItems
     */
    public function offsetGet($offset)
    {
      return $this->PackageCalendarPriceItems[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_PackageCalendarPriceItems $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PackageCalendarPriceItems[] = $value;
      } else {
        $this->PackageCalendarPriceItems[$offset] = $value;
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
      unset($this->PackageCalendarPriceItems[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_PackageCalendarPriceItems Return the current element
     */
    public function current()
    {
      return current($this->PackageCalendarPriceItems);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PackageCalendarPriceItems);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PackageCalendarPriceItems);
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
      reset($this->PackageCalendarPriceItems);
    }

    /**
     * Countable implementation
     *
     * @return JP_PackageCalendarPriceItems Return count of elements
     */
    public function count()
    {
      return count($this->PackageCalendarPriceItems);
    }

}

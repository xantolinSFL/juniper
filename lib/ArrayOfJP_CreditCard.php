<?php

class ArrayOfJP_CreditCard implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JP_CreditCard[] $CreditCard
     */
    protected $CreditCard = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JP_CreditCard[]
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param JP_CreditCard[] $CreditCard
     * @return ArrayOfJP_CreditCard
     */
    public function setCreditCard(array $CreditCard = null)
    {
      $this->CreditCard = $CreditCard;
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
      return isset($this->CreditCard[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JP_CreditCard
     */
    public function offsetGet($offset)
    {
      return $this->CreditCard[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JP_CreditCard $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CreditCard[] = $value;
      } else {
        $this->CreditCard[$offset] = $value;
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
      unset($this->CreditCard[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JP_CreditCard Return the current element
     */
    public function current()
    {
      return current($this->CreditCard);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CreditCard);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CreditCard);
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
      reset($this->CreditCard);
    }

    /**
     * Countable implementation
     *
     * @return JP_CreditCard Return count of elements
     */
    public function count()
    {
      return count($this->CreditCard);
    }

}

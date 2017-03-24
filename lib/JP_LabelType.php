<?php

class JP_LabelType
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $SortPriority
     */
    protected $SortPriority = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @param int $SortPriority
     * @param int $Code
     */
    public function __construct($SortPriority, $Code)
    {
      $this->SortPriority = $SortPriority;
      $this->Code = $Code;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return JP_LabelType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return JP_LabelType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getSortPriority()
    {
      return $this->SortPriority;
    }

    /**
     * @param int $SortPriority
     * @return JP_LabelType
     */
    public function setSortPriority($SortPriority)
    {
      $this->SortPriority = $SortPriority;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return JP_LabelType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

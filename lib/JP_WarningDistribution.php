<?php

class JP_WarningDistribution
{

    /**
     * @var int $Adults
     */
    protected $Adults = null;

    /**
     * @var int $Children
     */
    protected $Children = null;

    /**
     * @param int $Adults
     * @param int $Children
     */
    public function __construct($Adults, $Children)
    {
      $this->Adults = $Adults;
      $this->Children = $Children;
    }

    /**
     * @return int
     */
    public function getAdults()
    {
      return $this->Adults;
    }

    /**
     * @param int $Adults
     * @return JP_WarningDistribution
     */
    public function setAdults($Adults)
    {
      $this->Adults = $Adults;
      return $this;
    }

    /**
     * @return int
     */
    public function getChildren()
    {
      return $this->Children;
    }

    /**
     * @param int $Children
     * @return JP_WarningDistribution
     */
    public function setChildren($Children)
    {
      $this->Children = $Children;
      return $this;
    }

}

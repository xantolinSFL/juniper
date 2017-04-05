<?php

namespace Juniper\Webservice;

class JP_MultimediaContent
{

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return JP_MultimediaContent
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return JP_MultimediaContent
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
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
     * @return JP_MultimediaContent
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}

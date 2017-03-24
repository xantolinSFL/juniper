<?php

class JP_RequiredField
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @var ArrayOfJP_RequiredFieldValue $Values
     */
    protected $Values = null;

    /**
     * @var JP_RequiredFieldType $Type
     */
    protected $Type = null;

    /**
     * @var boolean $Mandatory
     */
    protected $Mandatory = null;

    /**
     * @param JP_RequiredFieldType $Type
     * @param boolean $Mandatory
     */
    public function __construct($Type, $Mandatory)
    {
      $this->Type = $Type;
      $this->Mandatory = $Mandatory;
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
     * @return JP_RequiredField
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return JP_RequiredField
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return ArrayOfJP_RequiredFieldValue
     */
    public function getValues()
    {
      return $this->Values;
    }

    /**
     * @param ArrayOfJP_RequiredFieldValue $Values
     * @return JP_RequiredField
     */
    public function setValues($Values)
    {
      $this->Values = $Values;
      return $this;
    }

    /**
     * @return JP_RequiredFieldType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param JP_RequiredFieldType $Type
     * @return JP_RequiredField
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMandatory()
    {
      return $this->Mandatory;
    }

    /**
     * @param boolean $Mandatory
     * @return JP_RequiredField
     */
    public function setMandatory($Mandatory)
    {
      $this->Mandatory = $Mandatory;
      return $this;
    }

}

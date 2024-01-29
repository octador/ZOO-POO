<?php

include_once("../utils/autoload.php");

class Enclos
{   protected int $id;
    protected int $limitNumberOfAnimals = 6 ;
    protected string $enclosureType;
    protected string $enclosureName;
    protected string $cleanLiness;
    protected int $numberOfAnimals ;

    public function __construct(array $data)
    {
        $this->enclosureType = $data['enclosureType'];
        $this->enclosureName = $data['enclosureName'];
        $this->cleanLiness = $data['cleanLiness'];
        $this->numberOfAnimals = $data['numberOfAnimals'];
    }

    /**
     * Get the value of numberOfAnimals
     */
    public function getNumberOfAnimals()
    {
        return $this->numberOfAnimals;
    }

    /**
     * Set the value of numberOfAnimals
     *
     * @return  self
     */
    public function setNumberOfAnimals($numberOfAnimals)
    {
        $this->numberOfAnimals = $numberOfAnimals;

        return $this;
    }

    /**
     * Get the value of cleanLiness
     */
    public function getCleanLiness()
    {
        return $this->cleanLiness;
    }

    /**
     * Set the value of cleanLiness
     *
     * @return  self
     */
    public function setCleanLiness($cleanLiness)
    {
        $this->cleanLiness = $cleanLiness;

        return $this;
    }

    /**
     * Get the value of enclosureName
     */
    public function getEnclosureName()
    {
        return $this->enclosureName;
    }

    /**
     * Set the value of enclosureName
     *
     * @return  self
     */
    public function setEnclosureName($enclosureName)
    {
        $this->enclosureName = $enclosureName;

        return $this;
    }

    /**
     * Get the value of enclosureType
     */
    public function getEnclosureType()
    {
        return $this->enclosureType;
    }

    /**
     * Set the value of enclosureType
     *
     * @return  self
     */
    public function setEnclosureType($enclosureType)
    {
        $this->enclosureType = $enclosureType;
    }
}

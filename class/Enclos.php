<?php

class Enclos
{
    protected int $limitNumberOfAnimals = 6;
    protected array $enclosureType;
    protected string $enclosureName;
    protected array $cleanLiness;
    protected array $numberOfAnimals;

    public function __construct($enclosureType, $enclosureName, $cleanLiness, $numberOfAnimals)
    {
        $this->enclosureType = $enclosureType;
        $this->enclosureName = $enclosureName;
        $this->cleanLiness = $cleanLiness;
        $this->numberOfAnimals = $numberOfAnimals;
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

        return $this;
    }
}

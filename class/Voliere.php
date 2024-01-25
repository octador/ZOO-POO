<?php

include_once('./utilis/autoload.php');

class Voliere extends Enclos
{
    protected array $aviaryAuthorization;

    public function __construct($enclosureType, $enclosureName, $cleanliness, $numberOfAnimals)
    {
        parent::__construct($enclosureType, $enclosureName, $cleanliness, $numberOfAnimals);

        
    }

    public function cleanTopEncosure()
    {
        echo 'je frotte le haut de la volière';
    }

    /**
     * Get the value of aviaryAuthorization
     */
    public function getAviaryAuthorization()
    {
        return $this->aviaryAuthorization;
    }

    /**
     * Set the value of aviaryAuthorization
     *
     * @return  self
     */
    public function setAviaryAuthorization($aviaryAuthorization)
    {
        $this->aviaryAuthorization = $aviaryAuthorization;

        return $this;
    }
}

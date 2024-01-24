<?php

spl_autoload_register(function ($class) {
    include 'class/' . $class . '.php';
});
class Voliere extends Enclos
{
    protected array $aviaryAuthorization;

    public function __construct($enclosureType, $enclosureName, $cleanliness, $numberOfAnimals, $aviaryAuthorization)
    {
        parent::__construct($enclosureType, $enclosureName, $cleanliness, $numberOfAnimals);

        $this->aviaryAuthorization = $aviaryAuthorization;
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

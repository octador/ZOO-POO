<?php

include_once('../utils/autoload.php');

class Voliere extends Enclos
{
    protected array $aviaryAuthorization;

    public function __construct(array $data)
    {
        parent::__construct($data);
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

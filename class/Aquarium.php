<?php

include_once('./utilis/autoload.php');

class Aquarium extends Enclos
{
    protected array $fishAuthorization;
    protected bool $saltwater = true;

    public function __construct(array $data)
    {
        parent::__construct($data);
    }

    /**
     * Get the value of fishAuthorization
     */
    public function getFishAuthorization()
    {
        return $this->fishAuthorization;
    }

    /**
     * Set the value of fishAuthorization
     *
     * @return  self
     */
    public function setFishAuthorization($fishAuthorization)
    {
        $this->fishAuthorization = $fishAuthorization;

        return $this;
    }

    /**
     * Get the value of saltwater
     */
    public function getSaltwater()
    {
        return $this->saltwater;
    }

    /**
     * Set the value of saltwater
     *
     * @return  self
     */
    public function setSaltwater($saltwater)
    {
        $this->saltwater = $saltwater;

        return $this;
    }
}

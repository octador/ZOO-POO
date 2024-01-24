<?php

class Tigre extends Animaux
{
    public function __construct($species_name, $weight, $size, $age, $type, $sexe)
    {
        $this->species_name = $species_name;
        $this->weight = $weight;
        $this->size = $size;
        $this->age = $age;
        $this->type = $type;
        $this->size = $sexe;
    }
    public function hunger()
    {
        // le tigre a fain toute les 5min
    }
    public function sleep()
    {
    }
    public function sick()
    {
    }
    public function noise()
    {
        echo 'graouuuuu';
    }
    public function walkTigre()
    {
        echo 'je marche dans mon enclos';
    }
}

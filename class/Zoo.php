<?php
include_once("./utilis/autoload.php");

class Zoo
{
    protected string $nameZoo;
    protected $createdEmploy ;
    protected int $numberEnclosurMax = 10 ;
    protected array $arrayEnclosur = ["afficher parm de l'enclos"];

    public function __construct(string $nameZoo, array $data)
    {
        $this->nameZoo = $nameZoo;
        $this->createdEmploy = new Employ($data['nameEmploy'], $data['ageEmploy'], $data['sexeEmploy']);
    }

    /**
     * Get the value of arrayEnclosur
     */
    public function getArrayEnclosur()
    {
        return $this->arrayEnclosur;
    }

    /**
     * Set the value of arrayEnclosur
     *
     * @return  self
     */
    public function setArrayEnclosur($arrayEnclosur)
    {
        $this->arrayEnclosur = $arrayEnclosur;

        return $this;
    }

    /**
     * Get the value of numberEnclosur
     */
    public function getNumberEnclosurMax()
    {
        return $this->numberEnclosurMax;
    }

    /**
     * Set the value of numberEnclosur
     *
     * @return  self
     */
    // public function setNumberEnclosurMax($numberEnclosur)
    // {
    //     $this->numberEnclosurMax = $numberEnclosur;

    //     return $this;
    // }

    /**
     * Get the value of numberEmploy
     */
    public function getcreatedEmploy()
    {
        return $this->createdEmploy;
    }

    /**
     * Set the value of numberEmploy
     *
     * @return  self
     */
    public function setcreatedEmploy($createdEmploy)
    {
        $this->createdEmploy = $createdEmploy;

        return $this;
    }

    /**
     * Get the value of nameZoo
     */
    public function getNameZoo()
    {
        return $this->nameZoo;
    }

    /**
     * Set the value of nameZoo
     *
     * @return  self
     */
    public function setNameZoo($nameZoo)
    {
        $this->nameZoo = $nameZoo;

        return $this;
    }
    public function displayEnclosur()
    {
        // afficher le contenue de tous les enclos
    }
    public function main()
    {

        // Pour chaque animal du zoo, on va aléatoirement modifier les valeurs des variables d'instance de cet animal (par exemple on le rend malade, on l'endort ou on l'affame).
        // Pour chaque enclos, on modifie aléatoirement son état de propreté, sa salinité, etc...
        // Enfin on passe la main à l'employé (donc à vous, utilisateur) pour qu'il s'occupe du zoo.

    }
}

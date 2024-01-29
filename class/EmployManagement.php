<?php


class EmployManagement
{

    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function checkEmploy(Employ $nameEmploy)
    {
        $request = $this->db->prepare('SELECT * FROM employ WHERE employ.name_employ = :name_employ');
        $request->execute([
            'name_employ' => $nameEmploy->getNameEmploy()
        ]);
        $resultEmploy = $request->fetch();
        
        $_SESSION['resultEmploy']= $resultEmploy;
        var_dump($_SESSION['resultEmploy']);
 


        return $resultEmploy;
    }


    public function addEmploy(Employ $nameEmploy)
    {

        $existingEmploy = $this->checkEmploy($nameEmploy);

        if (empty($existingEmploy)) {

            $request = $this->db->prepare('INSERT INTO employ (name_employ,age_employ,sexe_employ,id_zoo) VALUES (:name_employ,:age_employ,:sexe_employ,:id_zoo)');
            $request->execute([

                'name_employ' => $nameEmploy->getNameEmploy(),
                'age_employ' => $nameEmploy->getAgeEmploy(),
                'sexe_employ' => $nameEmploy->getSexeEmploy(),
                'id_zoo' =>  $_SESSION['id-zoo']
            ]);

            $id = $this->db->lastInsertId();
            $_SESSION['id'] = $id;
            $nameEmploy->setId($id);
        }
        
    }
}

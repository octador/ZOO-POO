<?php

class EnclosManagement
{

    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function checkEnclos(Enclos $enclosurname)
    {
        $request = $this->db->prepare('SELECT * FROM enclos WHERE enclosure_name =:enclosure_name');
        $request->execute([
            'enclosure_name' => $enclosurname->getEnclosureName()
        ]);

        $result = $request->fetch(PDO::FETCH_ASSOC);
        return ($result !== false);
    }
    public function numberMaxEnclos()
    {
        $idZoo = $_SESSION['idZoo'];

        $sql = $this->db->prepare("SELECT * FROM enclos WHERE id_zoo = $idZoo");
        $sql->execute();
        $statement = $sql->fetch();


        return count($statement);
    }



    public function deleteEnclos(Enclos $enclos){

        if (isset($post['id'])) {
            $sql = "DELETE FROM enclos WHERE enclos.id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', $enclos->getId(), PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                echo "Enclos supprimé avec succès.";
            } else {
                echo "Erreur lors de la suppression de l'enclos.";
            }
        } else {
            echo "ID non fourni pour la suppression de l'enclos.";
        }
    }
    





    public function addEnclos(Enclos $enclosurname)
    {
        $existingenclos = $this->checkEnclos($enclosurname);
        $numberEnclos = $this->numberMaxEnclos();

        if ($numberEnclos >= 6) {
            echo 'Vous ne pouvez plus ajouter des enclos !';
        } else {
            if (!$existingenclos) {

                $request = $this->db->prepare("INSERT INTO enclos (number_animals ,enclosure_type, enclosure_name, id_zoo) VALUE (:number_animals , :enclosure_type,:enclosure_name, :id_zoo)");
                $request->execute([
                    'number_animals' => $enclosurname->getNumberOfAnimals(),
                    'enclosure_type' => $enclosurname->getEnclosureType(),
                    'enclosure_name' => $enclosurname->getEnclosureName(),
                    'id_zoo' => $_SESSION['idZoo']
                ]);
            }
        }
    }
    public function enclosurePoster()
    {

        $result = $this->db->query("SELECT * FROM enclos ORDER BY id ASC");
        $result->execute();
        $posts = $result->fetchAll();
        return $posts;
    }
}

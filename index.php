<?php
require_once('./utils/autoload.php');
require_once('./utils/connexion_database.php');
// require_once('./utils/connexion_database.php');
if (
    isset($_POST['name-zoo']) && !empty($_POST['name-zoo']) &&
    isset($_POST['name-employ']) && !empty($_POST['name-employ']) &&
    isset($_POST['age-employ']) && !empty($_POST['age-employ']) &&
    isset($_POST['sexe-employ']) && !empty($_POST['sexe-employ'])

) {
    // var_dump($_POST);
    $nameZoo = $_POST['name-zoo'];

    $arrayEmploy  = array(
        'nameEmploy' => $_POST['name-employ'],
        'ageEmploy' => $_POST['age-employ'],
        'sexeEmploy' => $_POST['sexe-employ'],
    );
  

//     $_SESSION['resultEmploy'] = $arrayEmploy ;

//   var_dump( $_SESSION['resultEmploy']);

    $newZooManagement = new ZooManagement($db);
    $newZoo = new Zoo($nameZoo);
    $newZooManagement->addZoo($newZoo);
    $newEmployManager= new EmployManagement($db);
    $newEmploy = new Employ($arrayEmploy);
    $newEmployManager->addEmploy($newEmploy);

    var_dump($nameZoo);

 
    // echo $newZoo->getNameZoo();
   
    // var_dump($newZooManagement);
   
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./utils/style.css">
    <title>Document</title>
</head>

<body>
    <!-- created zoo -->
    <!-- created employ -->
    <div class="d-flex flex-column">
        <div>
            <h3> Créé votre ZOO :</h3>
            <form action="" method="post">
                <div>
                    <label for="name-zoo"> Quel nom veux tu donner a ton zoo : </label>
                    <input type="text" name="name-zoo" required>
                </div>
                <div>
                    <label for="name"> Donner un nom a votre employer :</label>
                    <input type="text" name="name-employ" required>
                </div>
                <div>
                    <label for="age"> Donner un age a votre employer :</label>
                    <input type="date" name="age-employ" required>
                </div>
                <div>
                    <select name="sexe-employ" id="sexe-employ" required>
                        <option value="femme">Femme</option>
                        <option value="homme">Homme</option>
                    </select>
                </div>
                <button type="submit">Valider</button>
            </form>
        </div>
    </div>
</body>

</html>
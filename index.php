<?php
include_once("./utilis/autoload.php");
if (
    isset($_POST['name-zoo']) && !empty($_POST['name-zoo']) &&
    isset($_POST['name-employ']) && !empty($_POST['name-employ']) &&
    isset($_POST['age-employ']) && !empty($_POST['age-employ']) &&
    isset($_POST['sexe-employ']) && !empty($_POST['sexe-employ'])
) {
var_dump($_POST);
    $nameZoo = $_POST['name-zoo'];
    $arrayEmploy  = array(
        'nameEmploy' => $_POST['name-employ'],
        'ageEmploy' => $_POST['age-employ'],
        'sexeEmploy' => $_POST['sexe-employ'],
    );

    $newZoo = new Zoo($nameZoo,$arrayEmploy);
var_dump($newZoo);

header("Location: ./Interface.php");

}







?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>ZOO</title>
</head>

<body>
    <!-- created zoo -->
    <!-- created employ -->
    <div class="d-flex flex-column">
        <div>
            <h3> Crée votre ZOO :</h3>
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

<!-- <div>
    <form action="" method="post">
        <label for="pet-select">choisir un animal : </label>

        <select name="pets" id="pet-select">
            <option value="">--Please choose an option--</option>
            <option value="tigre">Tigre</option>
            <option value="ours">Ours</option>
            <option value="poisson">poisson</option>
            <option value="aigle">Aigle</option>
        </select>
</div> -->






<!-- <label for="enclos-select"> Ajouter un enclos</label>
            <select name="enclos" id="enclos-select">
                <option value="">--Please choose an option--</option>
                <option value="1"> Ajouter enclos 1 </option>
                <option value="1"> Ajouter enclos 2 </option>
                <option value="1"> Ajouter enclos 3 </option>
                <option value="1"> Ajouter enclos 4 </option>
                <option value="1"> Ajouter enclos 5 </option>
                <option value="1"> Ajouter enclos 6 </option>
            </select>
            <button type="submit">Valider</button>
            </form> -->
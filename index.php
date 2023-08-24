<?php
    namespace model;
    require "model/Personne.php";
    // nom de la personne
    $nom = "Bob";
    // profession
    $profession = "Programmeur";
    // Création de compte
    $compte = new Compte();
    // Nom d'heure travaillé par jour pour l'utilisateur
    $nbHeureTravaillerJour = 8;
    // Inscrire le salaire par heure
    $salaire = 22.50;
    // Photo de bob
    $photo = "";
    $personne = new Personne($nom, $profession, $compte, $nbHeureTravaillerJour, $salaire, $photo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire cool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<h1>La vie de </h1>

<div class="row mt-4">
    <div class="col-md-3 mb-4 ">
        <div class="card colorr">
            <img src="<?php echo $photo; ?>" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?php echo $nom; ?></h5>
                <p class="card-text"><strong><?php echo $profession; ?></strong></p>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</body>
</html>


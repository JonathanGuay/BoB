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

    <header class="bg-light p-3 navbar">
        <div class=" d-flex align-items-center">
            <a href="#" title="Retour vers l'accueil">
                <img src="../fichier/patte2.png" alt="Logo" width="30" height="24">
            </a>
        </div>
        <nav>
            <ul class="nav flex justify-content-center">
                <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Jeu</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Modifier profil</a></li>
            </ul>
        </nav>
    </header>


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


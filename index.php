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
    <link rel="stylesheet" href="fichier/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<h5>La vie de BOB</h5>


<!--Affichage du titre qui comprends seulement les noms-->
<?php
echo "<h1> $nom";
foreach ($personne->listeAnimaux as $animaux){
    echo "<p>$animaux->$nom </p>";
}
echo "</h1>";
?>
<!--Affichage de la date courante-->
<p>Date courante : </p>


<!--div pour tous les box, METTRE EN GRID!!!!-->
<div class="flex">
<!--div pour bob-->
    <div class="row mt-4">
        <div class="col-md-3 mb-4 ">
            <div class="card colorr">
                <img src="<?php echo $photo; ?>" alt="" class="card-img-top">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $nom; ?></h3>
                    <ul>
                        <li><p class="card-text">Argent disponible : <?php echo $compte->getSolde(); ?></p></li>
                        <li><p class="card-text">Taux horaire : <?php echo $salaire; ?></p></li>
                        <li><p class="card-text">Poste : <?php echo $profession; ?></p></li>
                    </ul>
                    <button class="btn btn-primary">Travailler <?php echo $nbHeureTravaillerJour; ?>h</button>
                </div>
            </div>
        </div>
    </div>

<?php
    foreach ($personne->listeAnimaux as $animaux){



?>
        <div class="row mt-4">
            <div class="col-md-3 mb-4 ">
                <div class="card colorr">
                    <img src="<?php echo $animaux->photo; ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $animaux->nom; ?></h3>
                        <ul>
                            <li><p class="card-text">Dernier repas : <?php echo $animaux->Dernierrepas; ?></p></li>
                            <li><p class="card-text">A faim : <?php echo $animaux->SiFaim; ?></p></li>
                        </ul>
                        <button class="btn btn-primary">Nourrir <?php echo $animaux->nom; ?></button>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</body>
</html>


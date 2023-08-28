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
    $photo = "data:image/jpeg;base64,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";
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
    <header class="bg-light p-3 navbar">
        <div class="container">
        <div class=" d-flex align-items-center">
            <a href="#" title="Retour vers l'accueil">
                <img src="../fichier/patte2.png" alt="Logo" width="30" height="24">
            </a>
        </div>
        <nav>
            <ul class="nav flex justify-content-center">
                <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Ajout animal</a></li>
                <li class="nav-item"><a class="nav-link" href="views/ChangerPhotos.html">Modifier photo</a></li>
            </ul>
        </nav>
        </div>
    </header>

<p class="entete">La vie de BOB</p>
<div class="container">
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
                <div class="image">
                    <img src="<?php echo $photo; ?>" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo $nom; ?></h3>
                    <ul>
                        <li><p class="card-text">Argent disponible : <?php echo $compte->getSolde(); ?>$</p></li>
                        <li><p class="card-text">Taux horaire : <?php echo $salaire; ?>$</p></li>
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
                    <div class="image">
                        <img src="<?php echo $animaux->getPhoto(); ?>" alt="" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $animaux->getNom(); ?></h3>
                        <ul>
                            <li><p class="card-text">Dernier repas : <?php echo $animaux->getDernierRepas(); ?></p></li>
                            <li><p class="card-text">A faim : <?php echo $animaux->isAfaim(); ?></p></li>
                        </ul>
                        <button class="btn btn-primary">Nourrir <?php echo $animaux->getNom(); ?></button>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
?>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</body>
</html>


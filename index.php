<?php
    namespace model;
    require "Personne.php";
    // nom de la personne
    $nom = "Bob";
    // Création de compte
    $compte = new Compte();
    // Nom d'heure travaillé par jour pour l'utilisateur
    $nbHeureTravaillerJour = 8;
    // Inscrire le salaire par heure
    $salaire = 22.50;
    // Photo de bob
    $photo = "";
    $personne = new Personne($nom, $compte, $nbHeureTravaillerJour, $salaire, $photo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire cool</title>
</head>
<body>

<h1>La vie de </h1>

<div class="row mt-4">
    @foreach (var item in Model)
    {
    <div class="col-md-3 mb-4 ">
        <div class="card colorr">
            <img src="@Html.DisplayFor(modelItem => item.Photo)" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">@Html.DisplayFor(modelItem => item.Nom)</h5>
                <p class="card-text"><strong>Prix: @Html.DisplayFor(modelItem => item.Cout)</strong></p>

                @*On s'assure que l'utilisateur est connecté pour pouvoir ajouter un sushi au panier*@
                @if (@UserManager.GetUserName(User) == null)
                {
                <p>Veuillez-vous connecter pour ajouter l'item au panier</p>
                }
                else{
                @*Bouton pour ajouter un sushi au panier*@
                <a class="btn btn-primary" asp-area="" asp-route-Idsushi="@item.Id" asp-controller="Home"
                   asp-action="AjouterSushiAuPanier" asp-route-userId="@UserManager.GetUserName(User)">Ajouter au panier</a>
                }


                @*Bouton pour accéder à la vue de détails*@
                <a class="btn btn-primary mt-2" asp-route-id="@item.Id" asp-area="" asp-controller="Home"
                   asp-action="Details">Accéder au détail</a>
            </div>
        </div>
    </div>
    }
</div>


</body>
</html>


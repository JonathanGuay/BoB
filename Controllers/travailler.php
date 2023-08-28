<?php
require '../model/Personne.php';
session_start();
class travailler{
    private $personne;

    public function __construct() {
        $this->personne = new Personne();
    }

    public function Travailler() {
        // ajout a l'heure courant
        $heureCourante = $_SESSION['date'];
        $heureTravaille = $_SESSION['personne']->nbHeureTravaillerJour;
        // Créer un intervalle pour ajouter les heures
        $interval = new DateInterval("PT{$heureTravaille}H"); // PT signifie Période de Temps, H pour heures
        // Ajouter l'intervalle à la date courante
        $heureCourante->add($interval);

        // Changer l'argent dans le compte bancaire
        $salaire = $_SESSION['personne']->salaireHeure;
        $AjoutMontant = $salaire * $heureTravaille;
        // Fait le dépôt dans le compte
        $_SESSION['compte']->depot($AjoutMontant);

        // Rediriger vers la vue index après l'action
        header("Location: ../index.php");
    }



}
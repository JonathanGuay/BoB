<?php
require '../model/Personne.php';
class travailler{
    private $personne;

    public function __construct() {
        $this->personne = new Personne();
    }

    public function Travailler() {
        // ajout a l'heure courant

        // Changer l'argent dans le compte bancaire

        // ramener la vue index
        include '../index.php';
    }



}
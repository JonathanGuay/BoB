<?php
require '../model/Personne.php';

class manger{

    private $personne;

    public function __construct() {
        $this->personne = new Personne();
    }

    public function Manger() {
        // changer si a faim

        // Changer la date de dernier repas

        // ramener la vue index
        include '../index.php';
    }




}
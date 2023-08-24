<?php

namespace model;

class Personne
{
    public string $nom;
    public Compte $compte;
    public int $nbHeureTravaillerJour;
    public float $salaireHeure;
    public string $photo;
    public $listeAnimaux;

    // Constructeur de la classe MonZoo
    public function __construct(string $nom, Compte $compte, int $nbHeureTravaillerJour, float $salaireHeure, string $photo) {
        $this->nom = $nom;
        $this->compte = $compte;
        $this->nbHeureTravaillerJour = $nbHeureTravaillerJour;
        $this->salaireHeure = $salaireHeure;
        $this->photo = $photo;
        $this->listeAnimaux = array();
    }

    public function AvancerTemps(){

    }

}
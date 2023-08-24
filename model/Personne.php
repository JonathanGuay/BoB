<?php

namespace model;
require Animal::class;
require Compte::class;
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
    public function __construct2(string $nom) {
        $this->nom = $nom;

        $this->listeAnimaux = array();
    }

    public function AvancerTemps(){

    }

}
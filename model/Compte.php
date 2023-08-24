<?php

namespace model;

class Compte
{
    private int $solde;

    /**
     * @param int $solde
     */
    public function __construct()
    {
        $this->solde = 0;
    }

    //Ajoute un montant d'argent au solde
    public function depot(float $montant){
        $this->solde += $montant;

    }

    //retire un montant d'argent au solde
    public function debit(float $montant){
        $this->solde -= $montant;
    }


}
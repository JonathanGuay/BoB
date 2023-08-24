<?php

namespace model;

class Compte
{
    /**
     * @return int
     */
    public function getSolde(): int
    {
        return $this->solde;
    }

    /**
     * @param int $solde
     */
    public function setSolde(int $solde): void
    {
        $this->solde = $solde;
    }
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
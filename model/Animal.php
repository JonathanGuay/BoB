<?php

namespace model;

abstract class Animal
{

    protected string $nom;
    protected bool $afaim;
    protected string $son;
    protected int $DureeAvantFaim;
    protected int $FraisNourriture;
    protected string $type;
    protected DateTime $dernierRepas;
    protected string $photo;

    /**
     * @param string $nom
     * @param bool $afaim
     * @param string $son
     * @param int $DureeAvantFaim
     * @param int $FraisNourriture
     * @param string $type
     * @param DateTime $dernierRepas
     * @param string $photo
     */
    public function __construct(string $nom, bool $afaim, string $son, int $DureeAvantFaim, int $FraisNourriture, DateTime $dernierRepas, string $photo)
    {
        $this->nom = $nom;
        $this->afaim = $afaim;
        $this->son = $son;
        $this->DureeAvantFaim = $DureeAvantFaim;
        $this->FraisNourriture = $FraisNourriture;
        $this->dernierRepas = $dernierRepas;
        $this->photo = $photo;
    }

    public function getDureeAvantFaim(): int
    {
        return $this->DureeAvantFaim;
    }

    public function setDureeAvantFaim(int $DureeAvantFaim): void
    {
        $this->DureeAvantFaim = $DureeAvantFaim;
    }

    public function getFraisNourriture(): int
    {
        return $this->FraisNourriture;
    }

    public function setFraisNourriture(int $FraisNourriture): void
    {
        $this->FraisNourriture = $FraisNourriture;
    }


    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function isAfaim(): bool
    {
        return $this->afaim;
    }

    public function setAfaim(bool $afaim): void
    {
        $this->afaim = $afaim;
    }



    public function getDernierRepas(): DateTime
    {
        return $this->dernierRepas;
    }

    public function setDernierRepas(DateTime $dernierRepas): void
    {
        $this->dernierRepas = $dernierRepas;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    abstract public function son(): string;



}
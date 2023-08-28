<?php

namespace model;

class Chien extends Animal
{
    public function __construct( string $nom, bool $afaim, int $DureeAvantFaim, int $FraisNourriture, DateTime $dernierRepas, string $photo, string $type = "chien")
    {
        parent::__construct($nom, $afaim, $DureeAvantFaim, $FraisNourriture, $dernierRepas, $photo, $type);
    }

    public function son(): string
    {
        return "Woououf <br>";
    }
}
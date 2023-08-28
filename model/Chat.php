<?php

namespace model;

class Chat extends Animal
{
    public function __construct(string $nom, bool $afaim, string $son, int $DureeAvantFaim, int $FraisNourriture, DateTime $dernierRepas, string $photo, string $type = "chat")
    {
        parent::__construct($nom, $afaim, $DureeAvantFaim, $FraisNourriture, $dernierRepas, $photo, $type);
    }

    public function son(): string
    {
        return "Miaou <br>";
    }

}
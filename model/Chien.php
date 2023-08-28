<?php

namespace model;

class Chien extends Animal
{
    public function __construct(string $type = "chien")
    {
        parent::__construct($type);
    }

    public function son(): string
    {
        return "Woououf <br>";
    }
}
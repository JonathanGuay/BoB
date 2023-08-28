<?php

namespace model;

class Chat extends Animal
{
    public function __construct(string $type = "chat")
    {
        parent::__construct($type);
    }

    public function son(): string
    {
        return "Miaou <br>";
    }

}
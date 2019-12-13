<?php

namespace App\Spells;


use App\Card;

class Medkit extends Card
{
    public function __construct()
    {
        parent::__construct("Medikit", 1, 'Heal 20HP from a monster ');
    }
}
<?php

namespace App\Traps;
use App\Card;

class Pacifist extends Card
{
    public function __construct()
    {
        parent::__construct("Pacifist", 3, 'The monster that stapped on this trap cannot attack any monster.');
    }
}
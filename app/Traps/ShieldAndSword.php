<?php

namespace App\Traps;
use App\Card;

class ShieldAndSword extends Card
{
    public function __construct()
    {
        parent::__construct("Shield and Sword", 3, "The monster that stapped on this trap has it's defence and attack swapped.");
    }
}
<?php

namespace App\Traps;
use App\Card;

class UnendingRage extends Card
{
    public function __construct()
    {
        parent::__construct("Unending Rage", 3, 'The monster that stapped on this trap must attack every monster that comes in its path.');
    }
}
<?php

namespace App\Traps;


use App\Card;

class BegoneThot extends Card
{
    public function __construct()
    {
        parent::__construct("Begone Thot", 3, 'The monster that stapped on this trap is send back to the owners deck.');
    }
}
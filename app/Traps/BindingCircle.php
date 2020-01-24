<?php

namespace App\Traps;
use App\Card;

class BindingCircle extends Card
{
    public function __construct()
    {
        parent::__construct("Binding Circle", 3, 'The monster that stapped on this trap is unaffected by any other traps but it loses 10 attack.');
    }
}
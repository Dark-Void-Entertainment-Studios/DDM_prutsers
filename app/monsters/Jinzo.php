<?php


namespace App\monsters;


use App\Monster;

class Jinzo extends Monster
{
    public function __construct()
    {
       parent::__construct("Jinzo", 4, 30, 20, 40, "Negete a trap of your oppenent");
    }
}
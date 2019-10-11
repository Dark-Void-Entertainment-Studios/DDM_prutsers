<?php


namespace App\monsters;


use App\Monster;

class InsectQueen extends Monster
{

    public function __construct()
    {

       parent::__construct("Insect Queen", 3, 30, 20, 30, "Gain attack for every different tier monster you control");
    }
}
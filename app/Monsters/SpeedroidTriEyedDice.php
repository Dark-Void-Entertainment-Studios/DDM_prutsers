<?php


namespace App\monsters;


use App\Monster;

class SpeedroidTriEyedDice extends Monster
{
    public function __construct()
    {
       parent::__construct("Speedroid Tri-Eyed Dice", 3, 10, 20, 30, "Copy a dice you rolled this turn.");
    }
}
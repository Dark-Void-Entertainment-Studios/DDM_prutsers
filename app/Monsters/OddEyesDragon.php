<?php


namespace App\monsters;


use App\Monster;

class OddEyesDragon extends Monster
{
    public function __construct()
    {
       parent::__construct("Odd-Eyes Dragon", 3, 30, 20, 20, "Double the attack of this monster.");
    }
}
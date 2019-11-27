<?php


namespace App\monsters;


use App\Monster;

class AromaJar extends Monster
{
    public function __construct()
    {
       parent::__construct("Aroma Jar", 1, 10, 10, 10, " Gain 1 DM lifepoint (Max 3/Once).");
    }
}
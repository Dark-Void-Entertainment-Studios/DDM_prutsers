<?php


namespace App\monsters;


use App\Monster;

class Kuriboh extends Monster
{
    public function __construct()
    {
       parent::__construct("Kuriboh", 1, 10, 10, 10, "Destroy to negete 1 hit on the DM.");
    }
}
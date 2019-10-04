<?php


namespace App\monsters;


use App\Monster;

class GagagaMagician extends Monster
{
    public function __construct()
    {
       parent::__construct("Gagaga Magician", 2, 30, 10, 10, "Change attack and defence of this monster.");
    }
}
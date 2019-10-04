<?php


namespace App\monsters;


use App\Monster;

class MataiontheTimelord extends Monster
{
    public function __construct()
    {
       parent::__construct("Mataion, the Timelord", 4, 10, 40, 40, "Reroll all dices you rolled this turn");
    }
}
<?php


namespace App\monsters;


use App\Monster;

class Draconnet extends Monster
{
    public function __construct()
    {
       parent::__construct("Draconnet", 1, 10, 10, 10, "Summons 1 Bitron monster (Once).");
    }
}
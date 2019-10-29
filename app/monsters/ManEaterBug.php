<?php


namespace App\monsters;


use App\Monster;

class ManEaterBug extends Monster
{
    public function __construct()
    {
       parent::__construct("Man-Eater Bug", 2, 20, 20, 10, "Destroy 1 tile on the field.");
    }
}
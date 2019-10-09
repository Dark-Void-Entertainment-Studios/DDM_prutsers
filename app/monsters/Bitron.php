<?php


namespace App\monsters;


use App\Monster;

class Bitron extends Monster
{
    public function __construct()
    {
       parent::__construct("Bitron", 1, 10, 10, 10,"None.");
    }
}
<?php


namespace App\monsters;


use App\Monster;

class DarkMagician extends Monster
{
    public function __construct()
    {
        parent::__construct("Dark Magician", 3, 10, 30, 20);
    }
}
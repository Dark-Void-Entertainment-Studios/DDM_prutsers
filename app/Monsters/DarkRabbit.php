<?php


namespace App\monsters;


use App\Monster;

class DarkRabbit extends Monster
{
    public function __construct()
    {
       parent::__construct("Dark Rabbit", 3, 20, 10, 20, "Use one spell your opponent has.");
    }
}
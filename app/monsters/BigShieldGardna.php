<?php


namespace App\monsters;


use App\Monster;

class BigShieldGardna extends Monster
{
    public function __construct()
    {
       parent::__construct("Big Shield Gardna", 2, 10, 30, 20, "Double the defence of this monster");
    }
}
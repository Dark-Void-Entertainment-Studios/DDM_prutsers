<?php


namespace App\monsters;


use App\Monster;

class TimeWizard extends Monster
{
    public function __construct()
    {
       parent::__construct("Time Wizard", 2, 10, 10, 30, " Reroll 1 dice you rolled this turn.");
    }
}
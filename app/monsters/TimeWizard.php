<?php


namespace App\monsters;


use App\Monster;

class TimeWizard extends Monster
{
    private $name = "Time Wizard";
    private $level = 2;
    private $atk = 10;
    private $def = 10;
    private $hp = 30;
    private $effect = " Reroll 1 dice you rolled this turn.";
    public function __construct()
    {
       $this->name = $name;
       $this->level = $level;
       $this->atk = $atk;
       $this->def = $def;
       $this->hp = $hp;
       $this->effect = $effect;
       parent::__construct($name, $level, $atk, $def, $hp, $effect);
    }
}
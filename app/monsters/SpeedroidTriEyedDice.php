<?php


namespace App\monsters;


use App\Monster;

class SpeedroidTriEyedDice extends Monster
{
    private $name = "Speedroid Tri-Eyed Dice";
    private $level = 3;
    private $atk = 10;
    private $def = 20;
    private $hp = 30;
    private $effect = "Copy a dice you rolled this turn.";
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
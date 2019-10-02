<?php


namespace App\monsters;


use App\Monster;

class MataiontheTimelord extends Monster
{
    private $name = "Mataion, the Timelord";
    private $level = 4;
    private $atk = 10;
    private $def = 40;
    private $hp = 40;
    private $effect = "Reroll all dices you rolled this turn";
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
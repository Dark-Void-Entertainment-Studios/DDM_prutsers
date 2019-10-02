<?php


namespace App\monsters;


use App\Monster;

class OddEyesDragon extends Monster
{
    private $name = "Odd-Eyes Dragon";
    private $level = 3;
    private $atk = 30;
    private $def = 20;
    private $hp = 20;
    private $effect = "Double the attack of this monster.";
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
<?php


namespace App\monsters;


use App\Monster;

class GagagaMagician extends Monster
{
    private $name = "Gagaga Magician";
    private $level = 2;
    private $atk = 30;
    private $def = 10;
    private $hp = 10;
    private $effect = "Change attack and defence of this monster.";
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
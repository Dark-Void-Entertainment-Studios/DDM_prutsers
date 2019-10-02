<?php


namespace App\monsters;


use App\Monster;

class Kuriboh extends Monster
{
    private $name = "Kuriboh";
    private $level = 1;
    private $atk = 10;
    private $def = 10;
    private $hp = 10;
    private $effect = "Destroy to negete 1 hit on the DM.";
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
<?php


namespace App\monsters;


use App\Monster;

class BigShieldGardna extends Monster
{
    private $name = "Big Shield Gardna";
    private $level = 2;
    private $atk = 10;
    private $def = 30;
    private $hp = 20;
    private $effect = "Double the defence of this monster";
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
<?php


namespace App\monsters;


use App\Monster;

class Jinzo extends Monster
{
    private $name = "Jinzo";
    private $level = 4;
    private $atk = 30;
    private $def = 20;
    private $hp = 40;
    private $effect = "Negete a trap of your oppenent";
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
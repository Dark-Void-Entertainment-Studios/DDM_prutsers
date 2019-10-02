<?php


namespace App\monsters;


use App\Monster;

class ManEaterBug extends Monster
{
    private $name = "Man-Eater Bug";
    private $level = 2;
    private $atk = 20;
    private $def = 20;
    private $hp = 10;
    private $effect = "Destroy 1 tile on the field.";
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
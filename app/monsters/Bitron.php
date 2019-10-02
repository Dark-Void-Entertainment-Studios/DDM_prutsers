<?php


namespace App\monsters;


use App\Monster;

class Bitron extends Monster
{
    private $name = "Bitron";
    private $level = 1;
    private $atk = 10;
    private $def = 10;
    private $hp = 10;
    private $effect = "None.";
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
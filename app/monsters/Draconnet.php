<?php


namespace App\monsters;


use App\Monster;

class Draconnet extends Monster
{
    private $name = "Draconnet";
    private $level = 1;
    private $atk = 10;
    private $def = 10;
    private $hp = 10;
    private $effect = "Summons 1 Bitron monster (Once).";
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
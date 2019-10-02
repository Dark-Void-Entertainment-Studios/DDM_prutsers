<?php


namespace App\monsters;


use App\Monster;

class DarkRabbit extends Monster
{
    private $name = "Dark Rabbit";
    private $level = 3;
    private $atk = 20;
    private $def = 10;
    private $hp = 20;
    private $effect = "Use one spell your opponent has.";
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
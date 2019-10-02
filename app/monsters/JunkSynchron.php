<?php


namespace App\monsters;


use App\Monster;

class JunkSynchron extends Monster
{
    private $name = "Junk Synchron";
    private $level = 2;
    private $atk = 20;
    private $def = 10;
    private $hp = 20;
    private $effect = "The first time it would be destroyed it is not. ";
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
<?php


namespace App\monsters;


use App\Monster;

class DarkMagicianGirl extends Monster
{
    private $name = "Dark Magician Girl";
    private $level = 2;
    private $atk = 20;
    private $def = 20;
    private $hp = 20;
    private $effect = "Summon a portal on the field for 2 turns.";
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
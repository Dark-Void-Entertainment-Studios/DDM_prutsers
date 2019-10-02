<?php


namespace App\monsters;


use App\Monster;

class MangaRyuRan extends Monster
{
    private $name = "Manga Ryu-Ran";
    private $level = 2;
    private $atk = 20;
    private $def = 10;
    private $hp = 20;
    private $effect = "Each player loses 1 lifepoint (Only for Ruff Ruff McDogg). ";
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
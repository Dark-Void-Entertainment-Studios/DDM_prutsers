<?php


namespace App\monsters;


use App\Monster;

class ToonMermaid extends Monster
{
    private $name = "Toon Mermaid";
    private $level = 2;
    private $atk = 20;
    private $def = 20;
    private $hp = 10;
    private $effect = "Each player loses 1 lifepoint (Only for Maximillion Pegasus).";
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
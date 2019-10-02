<?php


namespace App\monsters;


use App\Monster;

class ChaosEmperorDragonEnvoyoftheEnd extends Monster
{
    private $name = "Chaos Emperor Dragon - Envoy of the End";
    private $level = 4;
    private $atk = 40;
    private $def = 30;
    private $hp = 40;
    private $effect = "Destroy all monsters in 1 row.";
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
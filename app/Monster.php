<?php

namespace App;

class Monster
{
    private $name;
    private $level;
    private $atk;
    private $def;
    private $hp;
    private $effect;

    public function __construct($name, $level, $atk, $def, $hp)
    {
       $this->name = $name;
       $this->level = $level;
       $this->atk = $atk;
       $this->def = $def;
       $this->hp = $hp;
    }

    public function attacked($dam) {
        //
    }
}

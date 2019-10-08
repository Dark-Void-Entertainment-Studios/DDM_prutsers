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
    private $imgPath;

    public function __construct($name, $level, $atk, $def, $hp, $effect = "N/A", $img = "N/A")
    {
       $this->name = $name;
       $this->level = $level;
       $this->atk = $atk;
       $this->def = $def;
       $this->hp = $hp;
       $this->effect = $effect;
       $this->imgPath = $img;
    }

    public function __get($item)
    {
       return $this->$item;
    }

    public function attacked($dam) {
        //
    }
}

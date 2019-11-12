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

    public function __construct($name, $level, $atk, $def, $hp, $effect = "N/A")
    {
       $this->name = $name;
       $this->level = $level;
       $this->atk = $atk;
       $this->def = $def;
       $this->hp = $hp;
       $this->effect = $effect;
       $this->setImage($name);
    }

    public function __get($item)
    {
       return $this->$item;
    }

    private function setImage($name) {
        $name = str_replace(" ", "", $name);
        $name = str_replace("#1", "", $name);
        $this->imgPath = "img/". $name . ".png" ;
    }

    public function attacked($dam) {
        //
    }
}

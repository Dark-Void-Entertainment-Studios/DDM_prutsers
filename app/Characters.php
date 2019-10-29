<?php

namespace App;

class Characters
{
    private $name;
    private $effect;
    private $imgPath;

    public function __construct($name, $effect)
    {
        $this->name = $name;
        $this->effect = $effect;

        $this->setImage($name);
    }

    private function setImage($name) {
        $this->imgPath = "img/". $name . ".png" ;
    }

    public function __get($item)
    {
        return $this->$item;
    }
}
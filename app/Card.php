<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/12/2019
 * Time: 09:38
 */

namespace App;


class Card
{
    private $name;
    private $level;
    private $effect;
    private $imgPath;

    public function __construct($name, $level, $effect)
    {
        $this->name = $name;
        $this->level = $level;
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
}
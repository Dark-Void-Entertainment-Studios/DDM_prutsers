<?php

namespace App\boardcreation;


class Tile
{
    private $place;
    private $obsticlas;
    private $condisions;

    public function __constuct($place, $condisions, $obsticlas = NULL)
    {
        $this->place = $place;
        $this->obsticlas = $obsticlas;
        $this->condisions = $condisions;
    }

    public function __get($item)
    {
        return $this->$item;
    }

    public function changecond($condisions)
    {
        $this->condisions = $condisions;
    }
}
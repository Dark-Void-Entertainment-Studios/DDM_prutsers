<?php

namespace App\boardCreation\boardSpaces;
use App\boardCreation\board;

class BoardSpaces extends Board 
{
    private $place;
    private $obsticlas = NULL;
    private $condisions;

    public function __constuct($place, $obsticlas = NULL, $condisions)
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
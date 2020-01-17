<?php

namespace App\boardCreation;
use App\boardCreation\boardSpaces;

class Board
{
    private $boardMatrix;

    public function __construct()
    {
        $size = 0;
        if ($size == 1) {
            $measurement = [26, 19];
        } else {
            $measurement = [13, 19];
        }
        $this->boardCreation($measurement);
    }

    public function boardCreation($measurement)
    {
        for ($i=0; $i < $measurement[0]; $i++) { 
            $boardMatrix[$i] = [];
            for ($y=0; $y < $measurement[1]; $y++) { 
                $boardMatrix[$i][$y] = [];
            }
        }
        dd($boardMatrix);
    }
}

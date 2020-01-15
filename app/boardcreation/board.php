<?php

namespace App\boardcreation;
use App\boardcreation\boardspeaces;

class board
{
    private $boardMatrix;

    public function __construct()
    {
        $size = 0;
        if ($size == 1) {
            $megerment = [26, 19];
        } else {
            $megerment = [13, 19];
        }
        for ($i=0; $i < $megerment[0]; $i++) { 
            $boardMatrix[$i] = [];
            for ($y=0; $y < $megerment[1]; $y++) { 
                $boardMatrix[$i][$y] = [];
            }
        }
        dd($boardMatrix);
    }
}

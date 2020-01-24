<?php

namespace App\boardcreation;


class Board
{
    private $boardMatrix;

    public function __construct()
    {
        $size = 0;
        dd(session());
        $measurement = null;

        if ($size == 1) {
            $measurement = [26, 19];
        } else {
            $measurement = [13, 19];
        }
        for ($i = 0; $i < $measurement[0]; $i++) {
            $this->boardMatrix[$i] = [];
            for ($y = 0; $y < $measurement[1]; $y++) {
                if ($) {
                    //
                } else {
                    $this->boardMatrix[$i][$y] = new Tile([$i, $y], null);
                }
            }
        }
    }

    public function getMatrix()
    {
        return $this->boardMatrix;
    }
}

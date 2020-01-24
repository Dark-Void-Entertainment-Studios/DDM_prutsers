<?php

<<<<<<< HEAD:app/boardcreation/Board.php
namespace App\boardcreation;


=======
namespace App\boardCreation;
use App\boardCreation\boardSpaces;

>>>>>>> feature-12:app/boardcreation/board.php
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
<<<<<<< HEAD:app/boardcreation/Board.php
        for ($i = 0; $i < $measurement[0]; $i++) {
            $this->boardMatrix[$i] = [];
            for ($y = 0; $y < $measurement[1]; $y++) {
                if ($) {
                    //
                } else {
                    $this->boardMatrix[$i][$y] = new Tile([$i, $y], null);
                }
=======
        $this->boardCreation($measurement);
    }

    public function boardCreation($measurement)
    {
        for ($i=0; $i < $measurement[0]; $i++) { 
            $boardMatrix[$i] = [];
            for ($y=0; $y < $measurement[1]; $y++) { 
                $boardMatrix[$i][$y] = [];
>>>>>>> feature-12:app/boardcreation/board.php
            }
        }
    }

    public function getMatrix()
    {
        return $this->boardMatrix;
    }
}

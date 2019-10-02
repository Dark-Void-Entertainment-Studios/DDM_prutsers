<?php

namespace App;


class Dice
{
    private $pattrn;
    private $sides;

    public function __construct($pattrn, $sides) {
        $this->pattrn = $pattrn;
        $this->sides = $sides;
    }

}

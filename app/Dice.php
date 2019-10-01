<?php

namespace App;


class Dice
{
    protected $pattrn;
    protected $sides;

    public function __construct($test) {
        $this->pattrn = $getRandomPattrn();
    }

}

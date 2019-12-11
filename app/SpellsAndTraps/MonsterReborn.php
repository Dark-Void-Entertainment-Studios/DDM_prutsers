<?php

namespace App\SpellsAndTraps;


class MonsterReborn extends monster
{
    public function __construct()
    {
        parent::__construct("Monster Reborn", 0, 0, 0, 0, "choose a monster on the field that monster gains live equil to its starting health");
    }
}
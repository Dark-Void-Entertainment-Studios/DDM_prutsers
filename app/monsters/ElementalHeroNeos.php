<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 02/10/2019
 * Time: 11:56
 */

namespace App\monsters;


use App\Monster;

class ElementalHeroNeos extends Monster
{
    public function __construct()
    {
        parent::__construct("Elemental HERO Neos", 2, 10, 10, 30, "none");
    }
}
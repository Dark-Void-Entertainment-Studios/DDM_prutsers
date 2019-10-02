<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 02/10/2019
 * Time: 11:54
 */

namespace App\monsters;


use App\Monster;

class BlueEyesWhiteDragon extends Monster
{
    public function __construct()
    {
        parent::__construct("Blue-Eyes White Dragon", 3, 20, 10, 30);
    }
}
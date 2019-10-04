<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 02/10/2019
 * Time: 11:50
 */

namespace App\monsters;


use App\Monster;

class RedEyesBlackDragon extends Monster
{
    public function __construct()
    {
        parent::__construct("Red-Eyes Black Dragon", 3, 20, 20, 20,"none");
    }
}
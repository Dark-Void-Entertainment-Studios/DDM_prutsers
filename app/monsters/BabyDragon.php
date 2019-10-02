<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 02/10/2019
 * Time: 12:50
 */

namespace App\monsters;


use App\Monster;

class BabyDragon extends Monster
{
    public function __construct()
    {
        parent::__construct("Baby Dragon", 1, 10, 10, 20);
    }
}
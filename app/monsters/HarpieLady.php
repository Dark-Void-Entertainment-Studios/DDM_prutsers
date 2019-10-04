<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 02/10/2019
 * Time: 12:06
 */

namespace App\monsters;


use App\Monster;

class HarpieLady extends Monster
{
    public function __construct()
    {
        parent::__construct("Harpy Lady", 2, 20, 10, 20, "none");
    }
}
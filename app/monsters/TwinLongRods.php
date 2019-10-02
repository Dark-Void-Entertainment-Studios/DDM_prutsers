<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 02/10/2019
 * Time: 12:02
 */

namespace App\monsters;


use App\Monster;

class TwinLongRods extends Monster
{
    public function __construct()
    {
        parent::__construct("Twin Long Rods #1", 1, 20, 10, 10);
    }
}
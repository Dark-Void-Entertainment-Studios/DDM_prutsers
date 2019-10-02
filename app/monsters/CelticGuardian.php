<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 02/10/2019
 * Time: 12:48
 */

namespace App\monsters;


use App\Monster;

class CelticGuardian extends Monster
{
    public function __construct()
    {
        parent::__construct("Celtic Guardian", 1, 10, 20, 10);
    }
}
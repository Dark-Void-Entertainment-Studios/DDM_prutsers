<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 02/10/2019
 * Time: 12:05
 */

namespace App\monsters;


use App\Monster;

class SkullServant extends Monster
{
    public function __construct()
    {
        parent::__construct("Skull Servant", 1, 20, 10, 10);
    }
}
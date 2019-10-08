<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 02/10/2019
 * Time: 12:53
 */

namespace App\monsters;


use App\Monster;

class Aitsu extends Monster
{
    public function __construct()
    {
        parent::__construct("Aitsu", 1, 20, 10, 10, "none", 'img/aitsu.png');
    }
}
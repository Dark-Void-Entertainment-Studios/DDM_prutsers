<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 02/10/2019
 * Time: 12:43
 */

namespace App\monsters;


use App\Monster;

class GaiaTheFierceKnight extends Monster
{
    public function __construct()
    {
        parent::__construct("Gaia The Fierce Knight", 3, 30, 10, 20, "none");
    }
}
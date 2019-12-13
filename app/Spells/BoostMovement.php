<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/12/2019
 * Time: 11:13
 */

namespace App\Spells;


use App\Card;

class BoostMovement extends Card
{
    public function __construct()
    {
        parent::__construct("Boost Movement", 3, 'Dubble the movement');
    }
}
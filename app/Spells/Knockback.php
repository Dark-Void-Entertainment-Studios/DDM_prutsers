<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/12/2019
 * Time: 13:34
 */

namespace App\Spells;


use App\Card;

class Knockback extends Card
{
    public function __construct()
    {
        parent::__construct("Knockback", 1, 'target a monster when that monster attacks');
    }
}
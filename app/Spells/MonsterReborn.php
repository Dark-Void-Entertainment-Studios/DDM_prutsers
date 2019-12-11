<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/12/2019
 * Time: 11:27
 */

namespace App\Spells;


use App\Card;

class MonsterReborn extends Card
{
    public function __construct()
    {
        parent::__construct("Monster Reborn", 2, 'Return a monster from the death ');
    }
}
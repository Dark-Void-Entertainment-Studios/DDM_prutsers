<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/12/2019
 * Time: 13:36
 */

namespace App\Spells;


use App\Card;

class SpellChest extends Card
{
    public function __construct()
    {
        parent::__construct("Spell Chest", 2, 'Place a chest in your opponents dungeon with a buff or debuff');
    }
}
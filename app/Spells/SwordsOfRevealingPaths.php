<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/12/2019
 * Time: 12:07
 */

namespace App\Spells;


use App\Card;

class SwordsOfRevealingPaths extends Card
{
    public function __construct()
    {
        parent::__construct("Swords Of Revealing Paths", 3, 'block a squire for 3 turns');
    }
}
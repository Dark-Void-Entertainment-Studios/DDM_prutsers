<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/12/2019
 * Time: 13:56
 */

namespace App\Spells;


use App\Card;

class LeapOfFaith extends Card
{
    public function __construct()
    {
        parent::__construct("Leap Of Faith", 3, 'target a monster if that monster is next to another monster jump over it');
    }
}
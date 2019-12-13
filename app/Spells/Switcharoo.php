<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/12/2019
 * Time: 12:28
 */

namespace App\Spells;


use App\Card;

class Switcharoo extends Card
{
    public function __construct()
    {
        parent::__construct("Switcharoo", 1, 'switch the location of 2 of your monsters');
    }
}
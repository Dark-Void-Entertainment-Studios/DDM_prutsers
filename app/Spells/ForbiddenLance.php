<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/12/2019
 * Time: 13:55
 */

namespace App\Spells;


use App\Card;

class ForbiddenLance extends Card
{
    public function __construct()
    {
        parent::__construct("Forbidden Lance", 2, 'targeted monster loses 10 atk but becomes unaffected by trap effects');
    }
}
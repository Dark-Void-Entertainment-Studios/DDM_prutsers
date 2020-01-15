<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 11/12/2019
 * Time: 13:31
 */

namespace App\Spells;


use App\Card;

class AloreParfum extends Card
{
    public function __construct()
    {
        parent::__construct("Alore Perfume", 3, 'target one of your monsters your opponents monsters can only attack that monster');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 02/10/2019
 * Time: 12:51
 */

namespace App\monsters;


use App\Monster;

class GeminiElf extends Monster
{
    public function __construct()
    {
        parent::__construct("Gemini Elf", 1, 10, 20, 10);
    }
}
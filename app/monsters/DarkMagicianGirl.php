<?php


namespace App\monsters;


use App\Monster;

class DarkMagicianGirl extends Monster
{
    public function __construct()
    {
       parent::__construct( "Dark Magician Girl", 2, 20, 20, 20, "Summon a portal on the field for 2 turns.");
    }
}
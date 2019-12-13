<?php


namespace App\monsters;


use App\Monster;

class MangaRyuRan extends Monster
{
    public function __construct()
    {
       parent::__construct("Manga Ryu-Ran", 2, 20, 10, 20, "Each player loses 1 lifepoint (Only for Ruff Ruff McDogg). ");
    }
}
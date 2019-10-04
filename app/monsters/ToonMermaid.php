<?php


namespace App\monsters;


use App\Monster;

class ToonMermaid extends Monster
{
    public function __construct()
    {
       parent::__construct("Toon Mermaid", 2, 20, 20, 10, "Each player loses 1 lifepoint (Only for Maximillion Pegasus).");
    }
}
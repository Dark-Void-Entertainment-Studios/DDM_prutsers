<?php


namespace App\monsters;


use App\Monster;

class ChaosEmperorDragonEnvoyoftheEnd extends Monster
{
    public function __construct()
    {
       parent::__construct("Chaos Emperor Dragon - Envoy of the End", 4, 40, 30, 40, "Destroy all monsters in 1 row.");
    }
}
<?php


namespace App\monsters;


use App\Monster;

class JunkSynchron extends Monster
{
    public function __construct()
    {
       parent::__construct("Junk Synchron", 2, 20, 10, 20, "The first time it would be destroyed it is not. ");
    }
}
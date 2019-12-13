 <?php

namespace App\Traps;
use App\Card;

class SwordAndShield extends Card
{
    public function __construct()
    {
        parent::__construct("Sword and Shield", 3, "The monster that stapped on this trap has it's attack and defence swapped.");
    }
}
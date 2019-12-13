 <?php

namespace App\Traps;
use App\Card;

class StealCrest extends Card
{
    public function __construct()
    {
        parent::__construct("Steal Crest", 3, 'When stepped on this trap your opponent steals 3 random crests.');
    }
}
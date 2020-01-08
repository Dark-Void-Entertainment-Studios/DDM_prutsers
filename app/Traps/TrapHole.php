 <?php

namespace App\Traps;
use App\Card;

class TrapHole extends Card
{
    public function __construct()
    {
        parent::__construct("Trap Hole", 3, 'The monster that stapped on this trap takes 20 damage.');
    }
}
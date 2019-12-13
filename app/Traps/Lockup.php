 <?php

namespace App\Traps;
use App\Card;

class Lockup extends Card
{
    public function __construct()
    {
        parent::__construct("Lockup", 3, 'The monster that stapped on this trap is locked in place for 3 turns.');
    }
}
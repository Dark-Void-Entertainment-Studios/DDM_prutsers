 <?php

namespace App\Traps;
use App\Card;

class Mimic extends Card
{
    public function __construct()
    {
        parent::__construct("Mimic", 3, 'The monster that stapped on this trap is destroyed.');
    }
}
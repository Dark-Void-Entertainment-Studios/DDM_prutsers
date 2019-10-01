<?php

namespace App;

class Monster extends Dice
{
    protected $dice;
    protected $level;
    protected $atk;
    protected $def;
    protected $hp;

    public function __construct(array $attributes = ['dice', 'level', 'atk', 'def', 'hp'])
    {
       $this->dice = $attributes['dice'];
       $this->level = $attributes['level'];
       $this->atk = $attributes['atk'];
       $this->def = $attributes['def'];
       $this->hp = $attributes['hp'];
    }
}

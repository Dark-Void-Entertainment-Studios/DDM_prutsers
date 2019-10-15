<?php

namespace App\Characters;

class Characters
{
	private $name;
	private $effect;

	public function __contructor($name, $effect){
		$this->name = $name;
		$this->effect = $effect;
	}
}
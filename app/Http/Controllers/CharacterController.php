<?php

namespace App\Http\Controllers;

use HaydenPierce\ClassFinder\ClassFinder;
use Illuminate\Http\Request;
use App\Game;
use Session;

class CharacterController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        $characterClasses = ClassFinder::getClassesInNamespace('App\Characters');
        $characters = [];

        foreach ($characterClasses as $character) {
            $a = new $character;
 
            array_push($characters, $a);
        }

        return view('characters', compact('characters'));
    }
}

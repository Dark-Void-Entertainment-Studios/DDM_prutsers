<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use HaydenPierce\ClassFinder\ClassFinder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function monsters()
    {
        $monsterClasses = ClassFinder::getClassesInNamespace('App\Monsters');
        $spellClasses = ClassFinder::getClassesInNamespace('App\Spells');
        $monsters = [];
        $spells = [];

        foreach ($monsterClasses as $monster) {
            $a = new $monster;
            array_push($monsters, $a);
        }

        foreach ($spellClasses as $spell) {
            $a = new $spell;
            array_push($spells, $a);
        }

        return view('monsters', compact("monsters", "spells"));
    }

    public function monsterShow($id)
    {
        $monsterClasses = ClassFinder::getClassesInNamespace('App\Monsters');

        $monster = new $monsterClasses[$id];

        return view('monsterShow', compact('monster'));
    }

}

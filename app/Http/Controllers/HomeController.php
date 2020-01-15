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
        $json = file_get_contents('version.json');
        $data = json_decode($json, True);
        $data = $data["version"];
        return view('home', [
            'data' => $data,
        ]);
    }

    public function monsters()
    {
        $monsterClasses = ClassFinder::getClassesInNamespace('App\Monsters');
        $spellClasses = ClassFinder::getClassesInNamespace('App\Spells');
        $trapClasses = ClassFinder::getClassesInNamespace('App\Traps');
        $monsters = [];
        $spells = [];
        $traps = [];

        foreach ($monsterClasses as $monster) {
            $a = new $monster;
            array_push($monsters, $a);
        }

        foreach ($spellClasses as $spell) {
            $a = new $spell;
            array_push($spells, $a);
        }

        foreach ($trapClasses as $trap) {
            $a = new $trap;
            array_push($traps, $a);
        }

        return view('monsters', compact("monsters", "spells", "traps"));
    }

    public function monsterShow($id)
    {
        $monsterClasses = ClassFinder::getClassesInNamespace('App\Monsters');

        $monster = new $monsterClasses[$id];

        return view('monsterShow', compact('monster'));
    }

}

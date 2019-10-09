<?php

namespace App\Http\Controllers;

use HaydenPierce\ClassFinder\ClassFinder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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

        $monsters = [];

        foreach ($monsterClasses as $monster) {
            $a = new $monster;
            array_push($monsters, $a);
        }

        return view('monsters', compact("monsters"));
    }

    public function monsterShow($id)
    {
        $monsterClasses = ClassFinder::getClassesInNamespace('App\Monsters');

        $monster = new $monsterClasses[$id];

        //dd($monster);

        return view('monsterShow', compact('monster'));
    }

}

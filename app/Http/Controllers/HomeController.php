<?php

namespace App\Http\Controllers;

use HaydenPierce\ClassFinder\ClassFinder;
use Illuminate\Http\Request;
use App\Monsters\Aitsu;
use App\Monsters\AromaJar;

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
    public function test()
    {
        $monsterClasses = ClassFinder::getClassesInNamespace('App\Monsters');

        $monsters = [];

        foreach ($monsterClasses as $monster) {
            $a = new $monster;
            array_push($monsters, $a);
        }

        return view('monsters', compact("monsters"));
    }


}

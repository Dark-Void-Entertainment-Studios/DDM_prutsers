<?php

namespace App\Http\Controllers;

use HaydenPierce\ClassFinder\ClassFinder;
use App\Game\DDM;
use Illuminate\Http\Request;
use auth;
use App\Game;
use Session;


class CharacterController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        dd($request);
        $id = auth::id();
        $board = new DDM($request);
        $board->startGame($request, $boardSize, $obstacles, $id, $time);

        $characterClasses = ClassFinder::getClassesInNamespace('App\Characters');
        $characters = [];

        foreach ($characterClasses as $character) {
            $a = new $character;
            array_push($characters, $a);
        }

        // return view('characters', compact('characters'));
    }
}

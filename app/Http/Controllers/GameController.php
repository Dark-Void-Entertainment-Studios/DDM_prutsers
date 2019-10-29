<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game\DDM;
use Session;
use App\Personas;

class GameController extends Controller
{
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
    	DB::insert('select * FROM ');

    	$ookniet = new DDM($request);
    	$ookniet->startGame($request, $persona, 1, 1);
    	dd($ookniet);
        return view('playBoard');
    }
}

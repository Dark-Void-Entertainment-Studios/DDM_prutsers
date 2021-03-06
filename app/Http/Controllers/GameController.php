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
    	$persona = Personas::find($request["character"]);
    	$DDM = new DDM($request);
    	$DDM->startGame($request, $persona, 1, 1);

        return view('playBoard');
    }
}

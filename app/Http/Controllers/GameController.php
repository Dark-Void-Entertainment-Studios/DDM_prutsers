<?php

namespace App\Http\Controllers;

use App\boardcreation\Board;
use Illuminate\Http\Request;
use App\Game\DDM;
use App\Personas;
use App\monsters\Jinzo;


class GameController extends Controller
{
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $DDM = new DDM($request);
        $board = new Board;
        return view('playBoard', compact('board'));
    }
}

<?php

namespace App\Http\Controllers;

use App\boardcreation\board;
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
        $board = new board;
        return view('playBoard', compact('board'));
    }
}

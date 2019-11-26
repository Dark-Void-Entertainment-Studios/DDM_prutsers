<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game\DDM;
use Session;
use App\Personas;
use App\monsters\Jinzo;


class GameController extends Controller
{
    public $monster;
   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $DDM = new DDM($request);
        $monster = new jinzo();
        return view('playBoard');
    }

    public function getName()
    {
        $name = $monster->__get(name);
        return $name;
    }
}

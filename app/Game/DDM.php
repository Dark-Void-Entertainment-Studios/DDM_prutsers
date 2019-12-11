<?php


namespace App\Game;
use Session;
use Illuminate\Http\Request;

use App\Monster;

class DDM
{
    private $info;
    private $charactor;
    private $boardSize;
    private $turn;
    private $obst;
    private $player;
    private $SID;
    private $time;


    public function __construct($request)
    {
        if($request->session()->has('Game')){
            $this->info = $request->session()->get('Game');
        } else {
            $this->info = NULL;
        }
    }
    public function startGame($request, $boardSize, $obst, $id, $time)
    {
        $this->info = [$boardSize, $obst, $id];
        $this->saveGame($request);
    }
    private function saveGame($request)
    {
        $request->session()->put('info', $this->info);
        $request->session()->save();
    }
}
<?php


namespace App\Game;
use Session;
use Illuminate\Http\Request;

use App\Monster;

class DDM
{
    private $info = [];

    public function __construct($request)
    {
        if($request->session()->has('ongoingGame')){
            $this->info = $request->session()->get('ongoingGame');
        } else {
            $this->info = 0;
        }
    }
    public function startGame($request, $charactor, $player, $id)
    {
        if(empty($this->info[$id]))
        {
            $this->info[$id] = ['player' => $player, 'charactor' => $charactor];
        } 
        else
        {
            $this->info = 0;
        }
        $this->saveGame($request);
    }
    private function saveGame($request)
    {
        $request->session()->put('info', $this->info);
        $request->session()->save();
    }
}
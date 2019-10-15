<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Characters;

class CharacterController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $characters = Characters::all();
        //dd($characters);
        return view('characters', compact('characters'));
    }
}

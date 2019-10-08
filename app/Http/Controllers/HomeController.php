<?php

namespace App\Http\Controllers;

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
        $dark = new aitsu();
        $light = new AromaJar();

        return view('monsters', compact("dark", "light"));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monster;
use App\monsters\Bitron;

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
        
        $first = new bitron();
        dd($first);
    }
}

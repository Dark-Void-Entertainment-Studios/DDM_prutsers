<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Monster;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Admin::all();

        return view('admin/index', compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dice = [1, [2, 1, 3 ,5 , 2, 2]];
        $values = ['normal', '1', '2', '3', '4'];
        $monster1 = new Monster($values[0], $values[1], $values[2], $values[3], $values[4], $dice );
        $monster2 = new Monster("normal", 4, 10, 5, 15, $dice);
        dd($monster1, $monster2);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Admin $admin
     * @return void
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function makeAdmin($id)
    {
        $user = Admin::find($id);
        $user->makeAdmin();
        $user->save();

        return redirect()->route("admin.index");
    }
}

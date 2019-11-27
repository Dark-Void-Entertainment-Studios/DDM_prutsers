<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/monsters', 'HomeController@monsters')->name('monsters');
route::get('/monster/{id}', 'HomeController@MonsterShow')->name('monster');

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/user', 'UserController@index');
    Route::get('/board', 'GameController@index');
    Route::get('/lobby', 'LobbyController@index');
    Route::get('/characters', 'CharacterController@index');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','HasRole:Admin,Super Admin']], function(){
    Route::resource('admin', 'AdminController');
    Route::put('makeAdmin/{id}', 'AdminController@makeAdmin')->name('makeAdmin');
});

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/teams', 'TeamController@index')->name('teams');
Route::get('/team/add', 'TeamController@add')->name('team.add');
Route::get('/team/edit/{id}', 'TeamController@edit');
Route::post('/team/store', 'TeamController@store')->name('team/store');
Route::post('/team/update', 'TeamController@update')->name('team/update');
Route::post('/team.destroy', 'TeamController@destroy')->name('team.destroy');
Route::get('/team/details/{id}', 'TeamController@details');

Route::get('/players', 'PlayerController@index')->name('players');
Route::get('/player/add', 'PlayerController@add')->name('player.add');
Route::post('/player/store', 'PlayerController@store')->name('player/store');


Route::get('/fixtures', 'FixtureController@index')->name('fixtures');
Route::get('/fixture/add', 'FixtureController@add')->name('fixture.add');
Route::post('/fixture/store', 'FixtureController@store')->name('fixture/store');
Route::get('/fixture/edit/{id}', 'FixtureController@edit');
Route::post('/points/update', 'PointsController@update')->name('points/update');

Route::get('/points', 'PointsController@points')->name('points');
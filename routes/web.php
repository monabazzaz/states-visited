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
    return view('Tracking');
});

Route::get('/states', 'StateController@index');
Route::post('/states', 'StateController@create');
Route::get('/states/{id}', 'StateController@show');
Route::put('/states/{id}', 'StateController@update');
Route::delete('/states/{id}', 'StateController@destroy');

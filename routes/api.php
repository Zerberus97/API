<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/profesor','UserController');
Route::post('/profesorc','UserController@store');
Route::get('/profesor/{id}','UserController@show');

Route::resource('/sala','SalaController');
Route::post('/salac','SalaController@store');
Route::get('/sala/{id}','SalaController@show');
Route::put('/salau/{id}','SalaController@update');


Route::resource('/registro','RegistroController');
Route::post('/registroc','RegistroController@store');
Route::get('/registro/{id}','RegistroController@show');

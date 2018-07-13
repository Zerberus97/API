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
    $registros = \App\Registro::all();
    $salas = \App\Sala::all();
    $profesores = \App\User::all();
    return view('Index',compact('registros','salas','profesores'));
});

Route::get('/home',function (){

    $profesores = \App\User::all();

    return view('home',compact(['$profesores => $Profesores']));
});

Route::get('/graficosala', function(){

    $registros = \App\Registro::all();
    $salas = \App\Sala::all();
    $profesores = \App\User::all();

    return view('GraficoSalas', compact('salas','registros', 'profesores'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/sala','SalaController');

Route::post('/User','UserController@store')->name('User');
Route::delete('/UserD','UserController@destroy')->name('UserD');



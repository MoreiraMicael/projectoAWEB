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
});

Route::get('/novo', function () {
    return view('form');
});

/*Route::get('/teste', function () {
    $nome = '<b>Carlos</b>';
    $altura = 1.8;

    return view('teste', compact('nome', 'altura'));
});*/

Route::get('/rota1', 'UserController@create');

Route::post('/rota2', 'UserController@store');

//Route::get('/caixas', 'CaixasController@index');

//Route::get('/registo', 'UserController@create');
//Route::post('/registo', 'UserController@store');

//Route::get('/login', 'SessionsController@create');
//Route::post('/login', 'SessionsController@store');

//Route::get('/logout', 'SessionsController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('parabens', function () {
    return view('parabens');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/registrar', 'indexController@registrar')->name('registrar');
Route::post('/logar', 'indexController@logar')->name('logar');
Route::post('/inscricao', 'HomeController@inscricao')->name('inscricao');
Route::post('/c_inscricao', 'HomeController@c_inscricao')->name('c_inscricao');

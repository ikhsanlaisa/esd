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

//Route::get('/snake', function () {
//    return view('soal.snake');
//});
//
//Route::get('/rockpaperscsr', function () {
//    return view('soal.rockpaperscsr');
//});

Route::get('/', 'HomeController@index');

Route::get('/timer', 'HomeController@timer');

Route::get('/chapter1', 'HomeController@chapter1');

Route::get('/chapter2', 'HomeController@chapter2');

Route::get('/binary', 'TaskController@soal1');

Route::post('/postsoal1', 'TaskController@postsoal1');

Route::get('/soal2', 'TaskController@soal2');

Route::post('/postsoal2', 'TaskController@postsoal2');

Route::get('/soal3', 'TaskController@soal3');
Auth::routes();


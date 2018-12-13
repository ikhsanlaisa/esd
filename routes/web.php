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


Route::get('/', 'HomeController@index');

Route::get('/snake', 'TaskController@snake');

Route::get('/rockpaperscsr', 'TaskController@rockpaperscsr');

Route::get('/hideandseek', 'TaskController@hideandseek');

Route::post('/postsoal3', 'TaskController@storehideandseek');

Route::get('/highlight', 'TaskController@highlight');

Route::post('/postsoal4', 'TaskController@storehighlight');

Route::get('/secretimage', 'TaskController@secretimage');

Route::post('/postsoal5', 'TaskController@storesecretimage');

Route::get('/hex', 'TaskController@hex');

Route::post('/postsoal6', 'TaskController@storehex');

Route::get('/abstrackwords', 'TaskController@abstrackwords');

Route::post('/postsoal7', 'TaskController@storeabstrackwords');

Route::get('/binary', 'TaskController@binary');

Route::post('/postsoal8', 'TaskController@storebinary');

Route::get('/convert13', 'TaskController@convert13');

Route::post('/postsoal9', 'TaskController@storeconvert13');

Route::get('/soalbonus', 'TaskController@soalbonus');

Route::post('/postsoal10', 'TaskController@storesoalbonus');

Route::get('/abstrackwords2', 'TaskController@abstrackwords2');

Route::post('/postsoal11', 'TaskController@storeabstrackwords2');
Auth::routes();


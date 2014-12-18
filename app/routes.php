<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'ApplicationController@index');
// Route::get('/', function(){
//   return 'success';
// });
Route::get('/about', 'ApplicationController@about');
Route::get('/instructions', 'ApplicationController@instructions');
Route::post('/postMessage', 'ApplicationController@postMessage');

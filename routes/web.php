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
Route::get('/pos', 'HomeController@pos');
Route::get('/tes', function(){
  return view('tes');
});
Route::post('/pos/{id}/hitung', 'HomeController@poshitung');
Route::get('/pos/data', 'HomeController@data_pos');
Route::post('/pos/new', 'HomeController@posadd');


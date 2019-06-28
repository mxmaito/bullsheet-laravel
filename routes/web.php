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

Route::get('/bullsheet/registro', function(){
  return view ('auth/register');
});

Route::get('/bullsheet/login', function(){
  return view ('login');
});


Route::get('/bullsheet', 'BullsheetController@index');

Auth::routes();

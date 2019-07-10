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


Route::get('/registro', function(){
  return view ('auth/register');
});

Route::get('/login', function(){
  return view ('login');
});

Route::get('/news', 'NewsController@index');

Route::get('/fakenews', 'FakeNewsController@index');

Route::get('/fakenews/new', 'FakeNewsController@create');

Route::get('/fakenews/{fakenew}', 'FakeNewsController@show');

Route::post('/fakenews', 'FakeNewsController@store');


Route::get('/realnews', 'RealNewsController@index');

Route::get('/realnews/new', 'RealNewsController@create');

Route::get('/realnews/{realnew}', 'RealNewsController@show');

Route::post('/realnews', 'RealNewsController@store');


Route::get('/', 'BullsheetController@index');

Route::get('/profile','UserController@index');
Route::get('/profile/edit',function(){
  return view('auth.editProfile');
});
Route::post('/profile/edit','UserController@store');

Route::get('/logout', function(){
  return view('layouts.app');
});

Auth::routes();
